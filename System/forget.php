<?php
//link to the php email library
require 'PHPMailer-master/PHPMailerAutoload.php';
include "conn.php";

//attach the email information for the networking side
$mail = new PHPMailer; //create object of email
$mail->isSMTP(); //email protocol
$mail->Host = 'smtp.gmail.com'; //hostname gmailx
$mail->Port = 587; //port number 
$mail->SMTPSecure = 'tls'; //secure layer
$mail->SMTPAuth = true;

//attach the information for email account 
//e.g. who is the sender,
//what is the gmail username and password

$mail->FromName = "KBAT E-Learning";
$mail->Username = "ben10chia@gmail.com";
$mail->Password = "xinyen96";

//to get the password from a textfile for security purpose
/*$file = fopen("emailpassword.txt","r");
$newpass = fgets($file);
fclose($file);
$mail->Password = "$newpass";*/

$email=$_POST['email'];

//the destination information 
//where you going to send out 
$mail->addAddress($email,"KBAT E-Learning Member");
//$mail->addAddress($email, '$name');
//$mail->addCC($email, '$name');
//$mail->addBCC($email, '$name');
function createRandomPassword() {
        $chars = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
        $i = 0;
        $pass = '' ;

        while ($i <= 8) {
            $num = mt_rand(0,61);
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
        }

        $pw = createRandomPassword();
        $query = "UPDATE student SET student_password = md5('$pw') WHERE student_email = '$email' ";
        $result = mysqli_query($conn, $query);
          if ($result){
          $query3 = "SELECT * FROM student where student_email = '$email'";
          $sql = mysqli_query($conn, $query3) or die(mysqli_error());  
          $rownum = mysqli_num_rows($sql);

         if(!$rownum  ) {
     	echo "<script>alert('We can not find your email in our records');</script>";
		die ("<script>window.history.go(-1);</script>");
        }

       }
//email content
//$mail->AddAttachment($file_to_attach, 'NameOfFile.pdf');
$mail->Subject = 'Reset Password!'; //subject title
$mail->msgHTML("<h1>This is the new autogenerated password!<br/>Login with the password below!</h1><br/> <h2><b>$pw</b></h2>");
$mail->AltBody = 'This is a plain-text message body';

//all info already add then can send out using send() method 
if (!$mail->send()) {
	echo "<script>alert('Mailer Error:".$mail->ErrorInfo."');</script>";
	die ("<script>window.history.go(-1);</script>");
} else {
	echo "<script>alert('Email Sent Out!');</script>";
	die ("<script>window.location.href='login.html';</script>");
}



?>