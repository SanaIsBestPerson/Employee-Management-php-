<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}

?>