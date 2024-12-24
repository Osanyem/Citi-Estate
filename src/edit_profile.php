<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Citi Estate | Profile</title>


  <link href="css/bootstrap.min.css" rel="stylesheet">


<style type="text/css">

	   		#navbar	{position: sticky;	top:0px; z-index: 1}

	
</style>  




</head>

<body style="background-color: rgb(248,249,250);">

<?php 
require ('forms/user.php');
$r = new User;
require('components/nav-bar.php');

if(!isset($_SESSION['userid'])){header('location:index.php');}

$details = $r->getDetails($_SESSION['userid']);
if (!empty($details)) {
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Profile Page</h1>

    <div class='alert alert-info'> You joined Citi Estate on <?php echo $details['date_joined']; ?></div>

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">

        <div class="list-group">
          <a href="index.php" class="list-group-item">Home</a>
          <a href="edit_profile.php" class="list-group-item">Edit Profile</a>
          <a href="properties.php" class="list-group-item">List Property</a>
          <a href="manage_prop.php" class="list-group-item">Manage Properties</a>
          <a href="forms/logout.php" class="list-group-item">Logout</a>
         
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
<form action="forms/user_update.php" method="post">
  <div class="form-group">
    <label for="inputFname">Firstname:</label>
    <input type="text" class="form-control" id="inputFname" placeholder="Enter First Name" name="fname" value="<?php echo $details['fname']; ?>">
  </div>
    <div class="form-group">
    <label for="inputLname">Lastname:</label>
    <input type="text" class="form-control" id="inputLname" placeholder="Enter Last Name" name="lname" value="<?php echo $details['lname']; ?>">
  </div>  
  <div class="form-group">
    <label for="inputEmail">Email Address:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" value="<?php echo $details['email']; ?>">
  </div>
  <div class="form-group">
    <label for="inputPhoneNumber">Phone Number:</label>    
    <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phone" name="phone" value="<?php echo $details['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="inputPassword">New Password:</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="New password">
  </div>
  <div class="form-group">
    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="password">
  </div>
  <br>
  <button type="button" class="btn btn-primary" id="updateBtn" >Update Profile</button>
  <br>
 
</form>
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
          <a href="index.php"><img src="/static/home_page/logo_head.png"></a>
          <span style="color: gray"><i>Follow Us:</i></span>
          <a href="https://www.facebook.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-twitter"></i></a>
          <span style="color: gray"><i>&copy; Est: 2019</i></span>
        </div>
      </div>
      </div>
<?php }
else{ header('location:index.php'); }
?>
<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
 <script type="text/javascript">
  $('#updateBtn').click(function() {
    var confirmPass = $('#confirmPassword').val();

    var password = $('#inputPassword').val();

    if(confirmPass != password) {$('#passwordAlert').html('Please make sure you entered the correct password')}
    else{$('#updateBtn').attr('type', 'submit');};
  });
</script>
</body>

</html>
