<?php

$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];

require_once("./commonDao.php");

if (empty($name) && empty($age) && empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id order by employee.id";
} elseif (empty($name) && empty($age) && !empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.gender_id= '".$gender."'order by employee.id";
} elseif (empty($name) && !empty($age) && empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.age = '".$age."' order by employee.id";
}elseif (empty($name) && !empty($age) && !empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.age = '".$age."' && employee.gender_id= '".$gender."' order by employee.id";
}elseif (!empty($name) && empty($age) && empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.name = '".$name."' order by employee.id";
}elseif (!empty($name) && empty($age) && !empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.name = '".$name."' && employee.gender_id= '".$gender."' order by employee.id";
}elseif (!empty($name) && !empty($age) && empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.name = '".$name."' && employee.age = '".$age."' order by employee.id";
}elseif (!empty($name) && !empty($age) && !empty($gender)) {
    $sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id && employee.name = '".$name."' && employee.age = '".$age."' && employee.gender_id= '".$gender."' order by employee.id";
}
$result = $conn->query($sql);

$rows = array();

    While($employee = mysqli_fetch_assoc($result)) {
        $rows[] = $employee;
    }

    $jasonData = json_encode($rows);
    echo $jasonData;

$conn->close();


?>

