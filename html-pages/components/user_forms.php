<!-- Sign Up Modal -->
<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">SIGNUP FOR CITI ESTATE</h3>
        <button type="button" class="close" id='signupdismiss' data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="forms/user_signup.php" method="post">
  <div class="form-group">
    <label for="inputFname">Firstname:</label>
    <input type="text" class="form-control" id="inputFname" placeholder="Enter First Name" name="fname" required>
  </div>
    <div class="form-group">
    <label for="inputLname">Lastname:</label>
    <input type="text" class="form-control" id="inputLname" placeholder="Enter Last Name" name="lname" required>
  </div>  
  <div class="form-group">
    <label for="inputEmail">Email Address:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label for="inputPhoneNumber">Phone Number:</label>    
    <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phone" name="phone" required>
  </div>
  <div class="form-group">
    <label for="inputPassword">Password:</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="password" required>
  </div>
  <p id="passwordAlert" style="color:red"></p>
  <br>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="tAndC">
    <label class="form-check-label" for="tAndC">Agree to terms and conditions</label>
    <br>
    <small><a href="#">Read our terms and conditions.</a></small>
  </div>
  <button type="submit" class="btn btn-primary" id="signupBtn" disabled>Signup</button>
  <br>
  <a data-toggle="modal" href="#modalLogin" onclick="$('#signupdismiss').click();">Already a user? Login</a>
</form>
      </div>
    </div>
  </div>
</div>


























<!-- Login Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">LOG INTO CITI ESTATE</h3>
        <button type="button" class="close" data-dismiss="modal" id="logindismiss" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="forms/user_login.php" method="post">
  <div class="form-group">
    <label for="enterEmail">Email address:</label>
    <input type="email" name="email" class="form-control" id="enterEmail" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="enterPassword">Password:</label>
    <input type="password" name="password" class="form-control" id="enterPassword" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <br>
  <a data-toggle="modal" href="#modalSignup" onclick="$('#logindismiss').click();">Don't have an account? Signup.</a>
</form>
      </div>
    </div>
  </div>
</div>