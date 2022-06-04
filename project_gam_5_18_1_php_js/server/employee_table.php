<?php
require_once("./db.php");

$sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id;";
$result = mysqli_query($conn, $sql);

    While($employee = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$employee['id']."</td>");
        echo("<td>".$employee['name']."</td>");
        echo("<td>".$employee['age']."</td>");
        echo("<td>".$employee['gender']."</td>");
        echo("</tr>");
    }
?>

