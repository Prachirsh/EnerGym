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
             <div class="col-md-3"><h3>Payment Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#05141e;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment ID </th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>Customer ID</th>
           <!-- <th>Customer Name</th>-->
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="function.php" method="post">
 
                    <label>Amount</label>
                    <input type="text" name="Amount" required class="form-control"><br>
                    <label>Customer</label>
                    <select class="form-control" name="customer_id">
                    <?php 
                    global $con;
                    $query="select * from members";
                    $member_details=mysqli_query($con,$query);
                    while ($row=mysqli_fetch_array($member_details))
                    {
       echo '<option value="'.$row['member_id'].'">'.$row['fname'].'</option>';
           } 
           ?>
          
           </select>
                    <label>Payment Type</label>
                    
<input type="text" name="payment_type" required class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>