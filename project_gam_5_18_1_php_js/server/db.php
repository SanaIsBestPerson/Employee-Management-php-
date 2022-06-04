<?php
$servername = "localhost";
$username = "sana";
$password = "1234";
$database = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}

?>