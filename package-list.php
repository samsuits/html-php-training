<?php
if(!isset($_COOKIE['user']))
{
        echo 'Please login before accessing the page<br/>';
        echo '<a href="login.html">Login</a><br/>';
        exit(0);
    
}

include 'db-connection.php';
$sql = 'select * from packages';
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>package_name</th>
            <th>package_price</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>edit</th>
            <th>delete</th>
        </tr>


        <?php
        foreach ($result as $row)
        {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['package_name'] . '</td>';
            echo '<td>' . $row['package_price'] . '</td>';
            echo '<td>' . $row['start_date'] . '</td>';
            echo '<td>' . $row['end_date'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>