<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
<?php 
include "nav.php";
include "includes/conn.php";
?>
   <div class="container-fluid m-5">
    <div class="row">
    <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group p-2" action="function.php" method="post">
                <label>first name:</label>
<input type="text" name="fname" class="form-control" required><br>
                    <label>last name:</label>
<input type="text" name="lname" class="form-control" required><br> 
 <label>email</label>
                    <input type="email" name="email" class="form-control" required><br>
                    <label>Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="member_trainer">
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
     <div >                                   
  <input type="submit" class="btn btn-primary" name="customer_submit" value="Register">               
     <a href="function.php" class="btn btn-light"></a>	      
               <?php
                   if (isset($_SESSION['u_id'])) {
                     echo '<form action="includes/index.php" method="POST">
                           <button type="submit" name="submit">logout</button>
                             </form>';	
                            } else{
                       
                       echo '<form action="includes/index.php" method="POST">                
                           </form>
                         <a href="index.php" class="btn btn-light" style="background-color:#05141e;color:FFFFFF">Logout</a>';
                   }
               ?>
                 </form>
                </div>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
 </nav>
</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   