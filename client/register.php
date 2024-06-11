<link rel="stylesheet" href="../bootstrap/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<body>
<?php 
include "../includes/conn.php";
include "../includes/imports.php";

// Check if the form is submitted
if(isset($_POST['customer_submit'])){
    // Handle form submission
    // You need to add the code here to process the form data
    // After processing, you can redirect the user to another page if needed
    // For example:
    // header("Location: ../success.php");
    // exit();
}

?>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
           
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group p-3" action="" method="post"> <!-- Removed action="../function.php" -->
                <label>first name:</label>
<input type="text" name="fname" required class="form-control">
                    <label>last name:</label>
<input type="text" name="lname" required class="form-control"> 
 <label>email</label>
                    <input type="text" name="email" required class="form-control">
                    <label>Mobile Number</label>
<input type="number" min="6000000000" max="9999999999" required name="contact" class="form-control">   
<label>Username </label>
<input type="text" name="username" required class="form-control">  
<label>Password</label>
<input type="text" name="password" required class="form-control">  
<label>gender</label>
<select class="form-control" name="gender">
<option value="male">male</option>
<option value="female">female</option>
<option value="Other">Other</option>
</select> 
<!-- <label>Trainer </label> 
 <select class="form-control" name="member_trainer">
 <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
            <option value="">No Trainer</option>
        </select> -->
        <br>      
    <input type="submit" class="btn btn-primary" name="customer_submit" value="Register">    
                <a href="../index.php" class="btn btn-danger">Back</a>
                </form>
                </div>
      </div>
       </div>
  <div class="mt-5"></div>
      <?php 
      include '../includes/footer.php';
      ?>
