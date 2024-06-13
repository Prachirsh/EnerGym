<?php 
include "includes/imports.php";
?>
  <body style="background:url('images/4.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/logo.jpeg" class="card-img-top">
            <div class="card-body">
              <center>
              <h3><b>Login</b></h3>
              <form class="form-group" method="POST" action="function.php">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary">
                <a href="client/register.php"   name="regbtn" class="btn btn-primary m-2">Register</a>
                </center>
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>

  </body>
</html>