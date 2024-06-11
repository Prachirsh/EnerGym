<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:gym1.database.windows.net,1433; Database = energym", "Azureuser", "MBF@1234567");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Azureuser", "pwd" => "MBF@1234567", "Database" => "energym", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:gym1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
$id = $_GET['deleteid'];
    $qry = mysqli_query($con,"delete  from members where member_id='$id'");
    if ($qry)
     {
echo '<script>alert("deleted successfully");location.href="../member_details.php";</script>';
    }
?>

