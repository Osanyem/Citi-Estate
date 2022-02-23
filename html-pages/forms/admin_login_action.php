<?php

require('admin_class.php');

$admin = new Admin;

$username = $_POST['adusername'];
$password = $_POST['adpassword'];

$admin->login($username, $password);





?>