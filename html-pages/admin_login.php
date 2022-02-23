<!DOCTYPE html>
<html lang='en'>

<head>
       <meta chartset='UTF-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <title>Citi Estate | ADMIN LOGIN</title>
     <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="fontawesome/css/all.min.css" type='text/css'>
</head>


<body>
<?php
require('components/admin_navbar.php');
 ?>
<div class="col-4 offset-4 shadow-lg mt-4 p-3 bg-light">
<h1>ADMIN LOGIN PAGE</h1>
<form action="forms/admin_login_action.php" method="post">
  <div class="form-group">
    <label for="enterAdUsername">Enter Admin Username:</label>
    <input type="text" name="adusername" class="form-control" id="enterAdUsername" placeholder="Enter Admin Username" autofocus autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="enterAdPassword">Enter Admin Password:</label>
    <input type="password" name="adpassword" class="form-control" id="enterAdPassword" placeholder="Enter Admin Password" required>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Login</button>
  <br>
</form>
</div>

<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
</body>
</html>