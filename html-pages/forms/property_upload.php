<?php

if($_POST) {
	session_start();


	require('property.php');

	$house = new Property;
	$location = htmlentities(trim($_POST['location']));
	$size = htmlentities(trim($_POST['size']));
	$lot_size = htmlentities(trim($_POST['lot_size']));
	$bedrooms = htmlentities(trim($_POST['bedrooms']));
	$bathrooms = htmlentities(trim($_POST['bathrooms']));
	$price = htmlentities(trim($_POST['price']));
	$property_type = $_POST['property_type'];
	$property_option = $_POST['property_option'];
	$description = htmlentities(trim($_POST['description']));
   	$r = $house->list_prop($location, $size, $lot_size, $bedrooms, $bathrooms, $price, $property_type, $description, $_SESSION['userid'], $property_option);
   	$house->upload($_FILES,$r,$property_option); 

if ($r > 0) {
	header('location:../successfulupload.php');
}
else {header('location:../unsuccessfulupload.php');}

}
else{header("location:../profile.php");}
?>