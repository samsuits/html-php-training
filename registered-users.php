<?php
 if (!isset($_COOKIE['user']))
 {
    echo 'Please login before accessing users page<br/>';
    echo '<a href="login.html">Login</a><br/>';
    exit(0);
 }

include 'db-connection.php';
$sql = 'select * from users';
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
    <h1>Registered Users</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        foreach ($resutls as $resut)
        {
            echo '<tr>';
            echo '<td>' . $resut['id'] . '</td>';
            echo '<td>' . $resut['name'] . '</td>';
            echo '<td>' . $resut['email'] . '</td>';
            echo '<td>' . $resut['mobile'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>