<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="admin/img/favicon.ico"
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/font-icon-style.css">
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="admin/css/pages/login.css">
</head>

<body> 

<!--====================================================
                        PAGE CONTENT
======================================================--> 
      <section class="hero-area">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 ">
                <div class="contact-h-cont">
                  <h3 class="text-center"><img src="admin/img/logo.png" class="img-fluid" alt=""></h3><br>
                  <form action="forget.php" method="post">
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required> 
                    </div>  
                    <button class="btn btn-general btn-blue" role="button" type="submit" style="margin-right:5%"><i fa fa-right-arrow></i>Submit</button>
                  </form>
                </div>
            </div>
          </div>  
        </div>
      </section>
      
    <!--Global Javascript -->
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/tether.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
</body>

</html>