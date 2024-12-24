<!DOCTYPE html>
<html lang='en'>

<head>
       <meta chartset='UTF-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <title>Citi Estate | Admin Page</title>
     <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="fontawesome/css/all.min.css" type='text/css'>
</head>


<body>


<?php
require ('forms/admin_class.php');
$r = new Admin;
require('components/admin_navbar.php');
if (!isset($_SESSION['adUsername'])) {
	header('location:index.php');
}
 ?>

 <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Admin Page</h1>


    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
	
        <div class="list-group">
          <a href="index.php" class="list-group-item">Home</a>
          <a href="admin_profile.php" class="list-group-item">Admin Home</a>
          <a href="all_profiles.php" class="list-group-item">User Profiles</a>
          <a href="manage_all_prop.php" class="list-group-item">Manage All Properties</a>
          <a href="forms/logout.php" class="list-group-item">Logout</a>
         
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2>Hi Citi Estate Admin,</h2>
        <p>This is the Citi Estate Admin page, from here you can view and delete the users and properties which you have been uploaded to Citi Estate.</p>
      </div>
    </div>
    <!-- /.row -->

  
  <!-- /.container -->

     <hr>
      <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1" style="text-align:center">
          <a href="" style="padding:30px">About</a>
          <a href="" style="padding:30px">Advertise</a>
          <a href="" style="padding:30px">Terms of Use and Policy</a>
          <a href="" style="padding:30px">Cookie Preference</a>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-2">
        <p style="text-align:center; font-size:0.7em">Citi Estate is committed to ensuring digital accessibility for individuals with disabilities. We are continuously working to improve the accessibility of our web experience for everyone, and we welcome feedback and accommodation requests. If you wish to report an issue or seek an accommodation, please <a href="">contact us.</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-4 p-2">
          <a href="index.php"><img src="../media/home_page/logo_head.png"></a>
          <span style="color: gray"><i>Follow Us:</i></span>
          <a href="https://www.facebook.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-twitter"></i></a>
          <span style="color: gray"><i>&copy; Est: 2019</i></span>
        </div>
      </div>
      </div>


<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
</body>
</html>