<?php require'cwconn.php'; 



session_unset();
session_destroy();
header("location: ../php/login.php");


?>
