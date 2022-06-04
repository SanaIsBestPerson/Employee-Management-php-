<?php

$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];

require_once("./commonDao.php");

$sql = "Insert into employee(name,age,gender_id) values ('".$name."','".$age."','".$gender."')";
$result = $conn->query($sql);

$conn->close();


?>

