<?php
require ('forms/admin_class.php');
$r = new Admin;

$details = $r->getSpecPropDetails($_GET['id']);
$pics = $r->getAllPropImg($_GET['id']);

if ($_POST) {


$fullname = trim($_POST['fname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$note = trim($_POST['note']);
$seller = $r->getSpecUserDetails($details['property_sellerid']);
$subject = "Enquiry about ".$details['property_location']."by ".$fullname;
$message = $note. "
                  These are my contact details; Phone: ".$phone.", Email: ".$email.".";

file_put_contents('message.txt', $message);

@mail($seller['email'],$subject,$message);
}
if (!empty($pics) AND !empty($pics)) {
?>


<!DOCTYPE html>
<html lang='en'>

<head>
       <meta chartset='UTF-8'>
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <title>Citi Estate | House</title>
	   <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="fontawesome/css/all.min.css" type='text/css'>
	   <style type="text/css">

	   		#navbar	{position: sticky;	top:0px; z-index: 1}

        #house_link {text-decoration: none}

        #options:hover  {box-shadow: 5px 5px 5px grey;}

        #features {display: inline-block;}

        .schoolInfo {width:45%; height: 30px}

	   </style>
</head>

<body style="background-image: url('uploaded/<?php echo $pics[0]['image_location'];?>');">
	<div class="container-fluid" style="background-color:rgb(226,225,214,0.9)">
		

<?php require('components/nav-bar.php');?>



<div class="row mt-2">


 <div class="col-sm-12 col-md-7 offset-md-1">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
 <?php 
if (!empty($pics)) { 
echo "<div class='carousel-item active'>
       <img style='width:1024px; height:683px' src='uploaded/".$pics[0]['image_location']."'>
     </div>"; 
  for ($i=0; $i <count($pics); $i++) { 
  echo "<div class='carousel-item'>
       <img style='width:1024px; height:683px' src='uploaded/".$pics[$i]['image_location']."'>
     </div>";
  }  
}
 ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 <div class="col-md-3 ml-md-5 p-2" style="background-color: white; border-radius: 5px;">
  <h5 style="text-align: center;">More About This Property</h5>
<form action="" method="post" class="col-11 p-1">
    <div class="form-group">
    <input type="text" class="form-control" id="InputFullName" aria-describedby="emailHelp" placeholder="Full Name" required name="fname">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" required name="email">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="InputPhoneNumber" placeholder="Phone" required name="phone">
  </div>
    <div class="form-group">
    <textarea class="w-100" style="color:gray; padding:7px" name="note">I am interested in <?php echo $details['property_location']; ?>.</textarea>
  </div>
  <div class="form-group form-check">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Email The Seller</button>
</form>
<span style="font-size: 0.70em">By proceeding, you consent to receive calls and texts at the number you provided, including marketing by autodialer and prerecorded and artificial voice, and email, from citiestate.com and others about your inquiry and other home-related matters, but not as a condition of any purchase. <span style="color: red">Your email and phone will be included at the end of the email.</span></span>
</div>
</div>



<div class="row mt-5">
<div class="col-sm-12 col-md-11 offset-md-1">  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60026.7460102673!2d-122.47967343970673!3d37.74860491956774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580d749ef8aad%3A0x36438dc5244799b4!2sSan%20Francisco%2C%20CA%2094123%2C%20USA!5e0!3m2!1sen!2sng!4v1574539557810!5m2!1sen!2sng" width="120" height="90" frameborder="0" style="border:0;"></iframe>

<h5 id="features" class="mx-5" style="text-align:center"><?php echo $details['property_bedrooms'];?> <br> <span>bedrooms</span></h5>
<h5 id="features" class="mx-5" style="text-align:center"><?php echo $details['property_bathrooms']; ?> <br> <span>bathrooms</span></h5>
<h5 id="features" class="mx-5" style="text-align:center"><?php echo $details['property_size']; ?> <br> <span>sq ft</span></h5>
<h5 id="features" class="mx-5" style="text-align:center"><?php echo $details['property_lotsize']; ?> <br> <span>sq ft lot </span></h5>
<h3 id="features" class="mx-5" style="text-align:center">$ <?php echo $details['property_price']; ?></h3>

<br><br>

<h6>Address: <?php echo $details['property_location']; ?></h6>


</div>


</div>

<div class="row mt-5">
  <div class="col-12">
    <h2><i class="fas fa-home"></i> Property Details for <?php echo $details['property_location']; ?></h2>
    <p><?php echo $details['property_description']; ?></p>
  </div>
</div>




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






      
 <?php 

 }
else{ header('location:index.php'); }



require('components/user_forms.php')
?>
















<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
<script type="text/javascript">
  $('#tAndC').click(function() {
    var confirmPass = $('#confirmPassword').val();

    var password = $('#inputPassword').val();

    var checker = $('#tAndC').prop('checked');

    if((confirmPass != password) && (checker == true)) {$('#passwordAlert').html('Please make sure you entered the correct password')}
    else{$('#signupBtn').removeAttr('disabled')};
  });
</script>

</body>
</html>
