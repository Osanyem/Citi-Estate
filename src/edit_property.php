<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Citi Estate | Edit Property</title>


  <link href="css/bootstrap.min.css" rel="stylesheet">


<style type="text/css">

        #navbar {position: sticky;  top:0px; z-index: 1}

  
</style>  




</head>

<body style="background-color: rgb(248,249,250);">

<?php 
require ('forms/user.php');
$r = new User;
require('components/nav-bar.php');

if(!isset($_SESSION['userid'])){header('location:index.php');}

$details = $r->getDetails($_SESSION['userid']);

require ('forms/property.php');
$p = new Property;
$prop = $p->getDetails($_SESSION['userid']);
$info = $p->editInfo($_GET['num'],$_SESSION['userid']);

if (!empty($details) AND !empty($info)) {  
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">List Property</h1>

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
<form action="forms/property_upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="location">Property Location</label>
    <input type="text" name="location" class="form-control" id="location" value="<?php echo $info['property_location']; ?>">
  </div>
  <div class="form-group">
    <label for="size">Property Size (in square feet)</label>
    <input type="text" name="size" class="form-control" id="size" value="<?php echo $info['property_size']; ?>">
  </div>
  <div class="form-group">
    <label for="lot_size">Property Lot Size (in square feet)</label>
    <input type="text" name="lot_size" class="form-control" id="lot_size" value="<?php echo $info['property_lotsize']; ?>">
  </div>    
  <div class="form-group">
    <label for="bedrooms">Number of Bedrooms</label>
    <input type="text" name="bedrooms" class="form-control" id="bedrooms" value="<?php echo $info['property_bedrooms']; ?>">
  </div> 
  <div class="form-group">
    <label for="bathrooms">Number of Bathrooms</label>
    <input type="text" name="bathrooms" class="form-control" id="bathrooms" value="<?php echo $info['property_bathrooms']; ?>">
  </div>
  <div class="form-group">
    <label for="price">Price of Property (in US Dollars)</label>
    <input type="text" name="price" class="form-control" id="price" value="<?php echo $info['property_price']; ?>">
  </div>            
  <div class="form-group">
    <label for="property_type">Select The Property Type</label>
    <select class="form-control" id="property_type" name="property_type">
      <option value="duplex">Duplex</option>
      <option value="bungalow">Bungalow</option>
      <option value="apartment">Apartment</option>
      <option value="mansion">Mansion</option>
    </select>
  </div>
    <div class="form-group">
    <label for="property_option" name="property_option">Select The Appropriate Option</label>
    <select class="form-control" id="property_option" name="property_option">
      <option value="rent">Rent</option>
      <option value="sale">Sale</option>
    </select>
  </div>
      <div class="form-group">
<!--     <form method="post" enctype="multipart/form-data" action="imageupload.php">
    <input type='file' name='mypix'>
    <button class="btn btn-primary">Upload Pictures</button>
  </form> -->
  </div>
  <div class="form-group">
    <label for="description">Property Description</label>
    <textarea class="form-control" name="description" id="description" rows="7" placeholder="Please provide a short and accurate description of the property that is being listed."><?php echo $info['property_description']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-lg btn-primary">UPDATE PROPERTY DETAILS</button>

  <br><br>
  <h6>NOTE: Images cannot be changed</h6>
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
else{ header('location:manage_prop.php'); }
?>
<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>

</body>
</html>