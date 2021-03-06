<?php

//Include Configuration File
include('configr.php');

$regis_button = '<a href="'.$google_client->createAuthUrl().'" class="btn btn-block py-2 btn-google">
            <span class="icon-google mr-3"></span>Register with Google</a>';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Registration</title>
  </head>
  <body>


  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/bg.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Registration to <strong>LMS</strong> </h3>
              </div>
              <div class="">
              <!-- <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span> Login with Google</a> -->
              <?php   echo $regis_button ; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
