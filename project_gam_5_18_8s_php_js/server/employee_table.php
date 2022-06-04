<?php
require_once("./commonDao.php");

$sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id order by employee.id;";
$result = mysqli_query($conn, $sql);

$rows = array();

    While($employee = mysqli_fetch_assoc($result)) {
        $rows[] = $employee;
    }

    $jasonData = json_encode($rows);
    echo $jasonData;

$conn->close();

?>

