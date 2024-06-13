<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
$con=mysqli_connect("localhost","root","","energym");
$id = $_GET['updateid'];
$userid=$_SESSION['id'];
    $qry = mysqli_query($con,"update members set member_trainer=".$id." where member_id=".$userid ."");
    if ($qry)
     {
echo '<script>alert("Trainer  Selected  successfully");location.href="client-payment.php";</script>';
    }
?>
