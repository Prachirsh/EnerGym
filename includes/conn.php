<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "energym";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `Trainer`";
$result1 = mysqli_query($connect, $query);
?>