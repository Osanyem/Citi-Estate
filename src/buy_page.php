<!DOCTYPE html>
<html lang='en'>

<head>
       <meta chartset='UTF-8'>
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <title>Citi Estate | Buy</title>
	   <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="fontawesome/css/all.min.css" type='text/css'>
	   <style type="text/css">
	   	
	   		div 	{}

	   		#searchBar 	 {min-height: 500px;	background-image:url('/static/buy_page/bi.png');	background-size: cover;						    background-attachment:fixed;}

	   		#navbar	{position: sticky;	top:0px; z-index: 1}

        #house_link {text-decoration: none; color: black}

        #options:hover  {box-shadow: 5px 5px 5px gray;}


	   </style>
</head>

<body style="background-color: rgb(248,249,250);">
	<div class="container-fluid">
		



<?php
require ('forms/admin_class.php');
$r = new Admin;
require('components/nav-bar.php');
$details = $r->getPropDetailsOpt('sale');
$pics = $r->getPropImg('sale');
?>


		<div class="row"  id='searchBar'>
			
			<div class="col-sm-12 col-md-8 offset-md-2">
				<h1 style="color: white; text-align: center; font-size: 5em; margin-bottom: 40px; margin-top: 130px">Reimagine Home</h1>
				<h3 style="color: white; text-align: center; font-size: 3em; margin-bottom: 40px">We'll help you find a place you love</h3>
			</div>

		</div>


      <div class="row mt-5">
<?php
if (!empty($details) AND !empty($pics)) {

for ($i=0; $i < count($details); $i++) { 
       echo "<a href='house_page.php?id=".$details[$i]['property_id']."' id='house_link'>
        <div class='col-md-3 col-12 p-2 my-2' style='background-color: white; text-align: center' id='options'>
          <img src='uploaded/".$pics[$i]['image_location']."' class='img-fluid'>
          <h4 style='padding-top: 10px'>$ ".number_format($details[$i]['property_price'],2)."</h4>
          <p style='padding-top: 10px; font-weight: 500'>".$details[$i]['property_bedrooms']. " bed, ".$details[$i]['property_bathrooms']." bath, ".$details[$i]['property_size']." sqft,<br>".$details[$i]['property_location']."</p>
          <a class='btn btn-outline-primary' href='house_page.php?id=".$details[$i]['property_id']."'>View</a>
        </div>
        </a>"; 
      } 
}        
?>
      </div>




      <div class="row my-5">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
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




</div>


<?php require('components/user_forms.php') ?>









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