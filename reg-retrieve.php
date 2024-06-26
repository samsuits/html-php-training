<?php
include 'db-connection.php';
$sql = 'select * from new_student';
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
           
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>confirm_password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        foreach ($results as $result)
        {
            echo '<tr>';
           
            echo '<td>' . $result['name'] . '</td>';
            echo '<td>' . $result['email'] . '</td>';
            echo '<td>' . $result['password'] . '</td>';
            echo '<td>' . $result['confirm_password'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>