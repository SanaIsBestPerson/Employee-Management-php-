<?php

$id = $_GET["id"];

require_once("./commonDao.php");

$sql = "DELETE FROM employee WHERE id ='".$id."'";
$result = $conn->query($sql);

$conn->close();


?>