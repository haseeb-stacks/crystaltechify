<?php
// config.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>



<?php
// Database configuration  
$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "user_db";

// Create database connection 
$con = new mysqli($hostname, $username, $password, $dbname);
// Check connection 
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>