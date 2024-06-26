<?php

include 'db-connection.php';
$sql = 'select * from booking';
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Booking Dates</th>
            <th>Guest Name</th>
            <th>Guest Email</th>
            <th>Guest Mobile</th>
            <th>No Of People</th>
            <th>edit</th>
            <th>delete</th>
        </tr>


        <?php
        foreach ($result as $row)
        {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['booking_dates'] . '</td>';
            echo '<td>' . $row['guest_name'] . '</td>';
            echo '<td>' . $row['guest_email'] . '</td>';
            echo '<td>' . $row['guest_mobile'] . '</td>';
            echo '<td>' . $row['no_of_people'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>