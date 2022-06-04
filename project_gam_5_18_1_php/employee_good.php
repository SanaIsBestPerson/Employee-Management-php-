<?php
require_once("./db.php");

$sql = "select employee.id as id,employee.name as name,employee.age as age,gender.name as gender from employee,gender where employee.gender_id= gender.id;";
$result = mysqli_query($conn, $sql);

?>

<html>
<head></head>
<body>  
    <table <table cellpadding ="5" border="1" cellspacing ="0" >>
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
                echo("<td>".$employee['gender']."</td>");
            echo("</tr>");
        }
    ?>
    </tbody> 
    </table>
</body>
</html>
