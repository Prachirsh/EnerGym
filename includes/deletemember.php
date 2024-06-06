<?php
$con=mysqli_connect("localhost","root","","energym");
$id = $_GET['deleteid'];
    $qry = mysqli_query($con,"delete  from members where member_id='$id'");
    if ($qry)
     {
echo '<script>alert("deleted successfully");location.href="../member_details.php";</script>';
    }
?>
