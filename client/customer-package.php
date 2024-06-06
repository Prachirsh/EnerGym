<!DOCTYPE html>
<?php 
include("client-import.php");
?>

<body>
<div class="jumbotron" style="background: url('../images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

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
         <th>Add</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_customer_package(); ?>
        </tbody>
    </table>
         </div>
         </br>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>