<?php
error_reporting(0);
$servername = "127.0.0.1";
$username = "root";
$password = "Modulusfb4";
$database = "test-db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>