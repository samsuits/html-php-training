<?php
include 'db-connection.php';
$sql = 'select * from users';
$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>


        <?php
        foreach ($results as $result)
        {
            echo '<tr>';
            echo '<td>' . $result['id'] . '</td>';
            echo '<td>' . $result['name'] . '</td>';
            echo '<td>' . $result['email'] . '</td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>