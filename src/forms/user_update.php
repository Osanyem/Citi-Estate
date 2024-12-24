<?php

if($_POST) {

	require('user.php');

	$user1 = new User;
	$fname = htmlentities(trim($_POST['fname']));
	$lname = htmlentities(trim($_POST['lname']));
	$email = htmlentities(trim($_POST['email']));
	$phone = htmlentities(trim($_POST['phone']));
	$password = htmlentities(trim($_POST['password']));
	$user1->update($fname, $lname, $email, $phone, $password, $_SESSION['userid']);

}
else{header("location:../index.php");}
?>