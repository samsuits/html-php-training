<?php
include 'db-connection.php';
$sql = 'select * from student';
$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>gender</th>
            <th>semester</th>
            <th>mobile</th>
            <th>address</th>
        </tr>


        <?php
        foreach ($results as $result)
        {
            echo '<tr>';
            echo '<td>' . $result['id'] . '</td>';
            echo '<td>' . $result['name'] . '</td>';
            echo '<td>' . $result['gender'] . '</td>';
            echo '<td>' . $result['semester'] . '</td>';
            echo '<td>' . $result['mobile'] . '</td>';
            echo '<td>' . $result['address'] . '</td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>