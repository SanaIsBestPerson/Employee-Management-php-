<?php
require_once("./commonDao.php");

$sql = "select gender.id,gender.name as gender from gender;";
$result = mysqli_query($conn, $sql);

$rows = array();

    While($gender = mysqli_fetch_assoc($result)) {
        $rows[] = $gender;
    }

    $jasonData = json_encode($rows);
    echo $jasonData;

?>

