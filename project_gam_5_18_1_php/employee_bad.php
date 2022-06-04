<?php
require_once("./db.php");

$sql = "select * from employee";
$result = mysqli_query($conn, $sql);

?>

<html>
<head></head>
<body>  
    <table cellpadding ="5" border="1" cellspacing ="0" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
    <?php
        While($employee = mysqli_fetch_assoc($result)) {
            echo("<tr>");
                echo("<td>".$employee['id']."</td>");
                echo("<td>".$employee['name']."</td>");
                echo("<td>".$employee['age']."</td>");
                echo("<td>");
                    $gender_id =$employee['gender_id'];
                    $gender_sql = "select name from gender where id = $gender_id";
                    $gender_result = mysqli_query($conn,$gender_sql);
                    $gender = mysqli_fetch_assoc($gender_result);
                    echo($gender['name']);
                echo("</td>");
            echo("</tr>");
        }
    ?>
    </tbody> 
    </table>
</body>
</html>
