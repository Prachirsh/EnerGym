<!DOCTYPE html>
<?php 
include("function.php");
include("nav.php");
?>
<html>
<head>
	<title>Members details</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#05141e;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
  
             </div>
             <div class="col-md-3"><h3>Pcakage Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#05141e;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Package ID </th>
            <th>Package Name</th>
         <th>Amount</th>
         <th>Delete</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_package(); ?>
        </tbody>
    </table>
         </div>
         </br>
    <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3>Register new Package</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="function.php" method="post">
              
 <label>Name</label>
                    <input type="text" name="Name" required class="form-control"><br>
                    <label>Fee Amount</label>
<input type="number" min="0" max="9999999999" name="fees" required class="form-control"><br> 
<label>Description</label>
<input type="text" name="description" required class="form-control"><br>
<input type="submit" class="btn btn-primary" name="package_submit" value="Register">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>