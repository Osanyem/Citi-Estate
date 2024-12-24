<?php

session_start();

session_unset($_SESSION['userid']);

session_unset($_SESSION['adUsername']);

session_destroy();

header('location:../index.php');








?>