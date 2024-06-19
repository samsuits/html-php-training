<?php
include 'db-connection.php';


$sql="SELECT * FROM students;";
$result=$conn->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Semester</th>
        <th>Mobileno</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        <?php
        foreach($result as $row)
        {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['semester'] . "</td>";
            echo "<td>" . $row['mobileno'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td><a href='edit.php'>Edit</a></td>";
            echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
            echo "</tr>";
        }            
        ?>
    </table>
</body>
</html>