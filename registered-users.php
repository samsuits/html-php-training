<?php
include 'db-connection.php';
$sql = 'select * from students';
$resutls = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        foreach ($resutls as $resut)
        {
            echo '<tr>';
            echo '<td>' . $resut['id'] . '</td>';
            echo '<td>' . $resut['name'] . '</td>';
            echo '<td>' . $resut['address'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>