<?php
session_start();
if (!$_SESSION["usersession"]) {
    header("Location:index.php");
     	
	}

?>