<?php

if($_POST) {

require('user.php');
$user = new User;

$email = trim($_POST['email']);
$pwd = trim($_POST['password']);

$user->login($email, $pwd);



}

else{header("location:../index.php");}
?>