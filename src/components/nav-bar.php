
		<div id="navbar" class="col-sm-12">	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div >
	<a href="index.php"><img src="../static/home_page/logo_head.png" class="img-fluid"></a>
				</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link" href="buy_page.php">BUY</a>
      </li>
      <?php if(!isset($_SESSION['userid'])){echo'
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#modalLogin">SELL</a>
      </li>';}
            else{echo '<li class="nav-item">
        <a class="nav-link" href="properties.php">SELL</a>
      </li>';}
      ?>
	  <li class="nav-item">
        <a class="nav-link" href="rent_page.php">RENT</a>
      </li>
      <?php if(!isset($_SESSION['userid'])){echo'
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#modalSignup">SIGNUP</a>
      </li>';}
            else{echo '<li class="nav-item">
        <a class="nav-link" href="profile.php">PROFILE</a>
      </li>';}
      ?>
      <li class="nav-item">
        <a class="nav-link" <?php if(!isset($_SESSION['userid'])){echo 'data-toggle="modal"';}?> href="<?php if(isset($_SESSION['userid'])){echo 'forms/logout.php';}  else{echo'#modalLogin';}?>"><?php if(isset($_SESSION['userid'])){echo 'LOGOUT';}  else{echo'LOGIN';}?></a>
      </li>        
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="searchtxt">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="button" id="btn">Search</button>
    </form>
    <div id="results" class="col-3 p-1"></div>
  </div>
</nav>
</div>

<script src='js/jquery.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
  <script>
    $(document).ready(function(){
      $('#btn').click(function(){
        var mydata = $('#searchtxt').val();
        $.ajax({
        url:"search.php",
        type:"GET", 
        data:"item="+mydata,
        dataType:"text",
        success:function(s){
          $('#results').html(s);
        },
        error:function(errmsg){
          console.log(errmsg);
        }
      }); 
      })
      //$.ajax({variable:value,variable:value})
    });
  </script>