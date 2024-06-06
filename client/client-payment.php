<!DOCTYPE html>
<?php 
include "client-import.php";
?>

<body>
<div class="jumbotron" style="background: url('../images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

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
          
        </tr>   
        </thead>
        
        <tbody>
          <?php get_customer_payment();  ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body"></div>
                <h4><?php get_price();?></44>

                <form class="form-group" action="../function.php" method="post">
 
                    <label>Credit Card Number</label>
                    <input type="number" name="card_number" required class="form-control"><br>
                    <label>CVV</label>
                    <input type="number" min="000" max="999" name="cvv" required class="form-control"><br> 

          
           </select>
                    <label>Expiry Date</label>
                    
<input type="date" name="expiry_date" required class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="pay_submit_cust" value="PAY">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>