<?php
include 'db-connection.php';
$sql = 'select * from room';
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room</title>
</head>
<body>
    <table border=10>
        <tr>

        <th>id</th>
        <th>room_name</th>
        <th>bed_type</th>
        <th>ac_type</th>
        <th>price</th>
        <th>edit</th>
        <th>delete</th>
        </tr>  

        <?php
        foreach ($result as $row)
        {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['room_name'] . '</td>';
            echo '<td>' . $row['bed_type'] . '</td>';
            echo '<td>' . $row['ac_type'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo "<td><a href='editt.php'>Edit</a></td>";
            echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
            echo '</tr>';
        }   
     
         ?>
         </table>
</body>
</html>