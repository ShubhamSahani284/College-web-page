<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location:main.php");
ob_end_flush(); 
include 'main.php';
//include 'main.php';
exit();
?>