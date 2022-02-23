<?php

require('admin_class.php');
$user = new Admin;



$user->deleteUser($_GET['id']);






?>