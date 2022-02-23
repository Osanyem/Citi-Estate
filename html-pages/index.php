

<!DOCTYPE html>
<html lang='en'>

<head>
       <meta chartset='UTF-8'>
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <title>Citi Estate | Home</title>
	   <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="fontawesome/css/all.min.css" type='text/css'>
	   <style type="text/css">
	   	
	   		div 	{}

	   		#searchBar 	 {min-height: 600px;	background-image:url('../media/home_page/bi.jpg');	background-size: cover;						background-attachment:fixed;}

	   		#navbar	{position: sticky;	top:0px; z-index: 1}

	   		#bottom 	{min-height:300px;background-image:url('../media/home_page/bottom.png'); background-size: cover }

	   		#space 	{height: 100px;}

	   		#options:hover 	{box-shadow: 5px 5px 5px grey;}

	   		#house_link {text-decoration: none; color: black}

	   </style>
</head>

<body style="background-color: rgb(248,249,250);">

	<div class="container-fluid">
		

<?php 
require ('forms/user.php');
$r = new User;
require('components/nav-bar.php') ?>




		<div class="row"  id='searchBar'>
			
			<div class="col-sm-12 col-md-8 offset-md-2">
				<h1 style="color: white; text-align: center; font-size: 5em; margin-bottom: 40px; margin-top: 130px">Reimagine Home</h1>
				<h3 style="color: white; text-align: center; font-size: 3em; margin-bottom: 40px">We'll help you find a place you love</h3>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-10 col-sm-12 offset-md-1" style="padding: 45px">
				<h1 style="text-align: center">We have the most listings and constant updates.</h1>
				<h1 style="text-align: center">So you’ll never miss out.</h1>
			</div>

			<div class="col-2 offset-5">
				<hr style="border: 1px solid yellow">
			</div>

		</div>




			<div class="row">

				<a href="buy_page.php" id="house_link">
				<div class="col-md-3 col-12 ml-md-5 p-2" style="background-color: white; text-align: center" id="options">
					<img src="../media/home_page/buy_pic.png" class="img-fluid">
					<h2 style="padding-top: 10px">Buy A Home</h2>
					<p style="padding-top: 10px; font-weight: 500">Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</p>
					<a class="btn btn-outline-primary" href="buy_page.php">Search Homes</a>
				</div>
				</a>

				<a data-toggle="modal" href="#modalLogin"id="house_link">
				<div class="col-md-3 col-12 offset-md-1 p-2" style="background-color: white; text-align: center" id="options">
					<img src="../media/home_page/sell_pic.png" class="img-fluid">
					<h2 style="padding-top: 10px">Sell A Home</h2>
					<p style="padding-top: 10px; font-weight: 500">Whether you sell with new Citi Estate™ or take another approach, we’ll help you navigate the path to a successful sale.Get started selling with us today.</p>
					<a class="btn btn-outline-primary" data-toggle="modal" href="#modalLogin">Sell with Citi Estate</a>					
				</div>
				</a>
	
				<a href="rent_page.php" id="house_link">
				<div class="col-md-3 col-12 offset-md-1 p-2" style="background-color: white; text-align: center" id="options">
					<img src="../media/home_page/rent_pic.png" class="img-fluid">
					<h2 style="padding-top: 10px">Rent A Home</h2>
					<p style="padding-top: 10px; font-weight: 500">We’re creating a seamless online experience – from shopping on the largest rental network, to applying, to paying rent.</p>
					<a class="btn btn-outline-primary" href="rent_page.php">Find rentals</a>					
				</div>
				</a>

			</div>	

			<div class="row" id="space">

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
					<a href="index.php"><img src="../media/home_page/logo_head.png" ></a>
					<span style="color: gray"><i>Follow Us:</i></span>
					<a href="https://www.facebook.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/" style="font-size:1.5em" target='_blank'><i class="fab fa-twitter"></i></a>
					<span style="color: gray"><i>&copy; Est: 2019</i></span>
				</div>
			</div>

			<div class="row" id="bottom">
				
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