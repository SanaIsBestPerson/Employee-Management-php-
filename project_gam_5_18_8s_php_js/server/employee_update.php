<?php

echo("hi");
$id = $_GET["id"];
$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];

echo("".$id.$name.$age.$gender);
require_once("./commonDao.php");

$sql ="UPDATE employee
       SET name = '".$name."', age = '".$age."', gender_id = '".$gender."'
       WHERE id = '".$id."'";

$result = $conn->query($sql);

$conn->close();


?>

