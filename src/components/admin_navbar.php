		<div id="navbar" class="col-sm-12">	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div >
	<a href="index.html"><img src="/static/home_page/logo_head.png" class="img-fluid"></a>
				</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link" href="index.php">GO BACK HOME</a>
      </li>
<?php
  if (isset($_SESSION['adUsername'])) {      
   echo   '<li class="nav-item">
        <a class="nav-link" href="forms/logout.php">LOGOUT</a>
      </li>';
  }    
?>      
  </div>
</nav>
</div>