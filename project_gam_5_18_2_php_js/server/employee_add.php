<?php

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];

require_once("./db.php");

$sql = "Insert into employee values ('".$id."','".$name."','".$age."','".$gender."')";
$result = $conn->query($sql);

$conn->close();


?>

