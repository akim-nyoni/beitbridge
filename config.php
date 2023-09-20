<?php
session_start();
$servername = "localhost";
$username = "beitbrid_wp221";
$password = "!2l(7pSi55";
$dbname = "beitbrid_wp221";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($conn));
// Check connection
mysqli_select_db($conn, $dbname) or die(mysqli_error($conn));

//Variables
$msg = "";
$AccountNo = $_SESSION['acc_num'];
?>

