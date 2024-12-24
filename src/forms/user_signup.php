<?php

if($_POST) {

	require('user.php');

	$user1 = new User;
	$fname = htmlentities(trim($_POST['fname']));
	$lname = htmlentities(trim($_POST['lname']));
	$email = htmlentities(trim($_POST['email']));
	$phone = htmlentities(trim($_POST['phone']));
	$password = htmlentities(trim($_POST['password']));
	$r = $user1->signup($fname, $lname, $email, $phone, $password);

	if($r>0) {
		header("location:../profile.php");
	}
	else {
		header("location:../index.php");
	}


}
else{header("location:../index.php");}
?>