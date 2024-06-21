<?php
include 'db-connection.php';
$sql = 'select * from payments';
$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user payments</title>
</head>

<body>
    <table border="1">
        <tr>
           
            <th>id</th>
            <th>payment_date</th>
            <th>guest_name</th>
            <th>payment_method</th>
            <th>amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        foreach ($results as $result)
        {
            echo '<tr>';
           
            echo '<td>' . $result['id'] . '</td>';
            echo '<td>' . $result['payment_date'] . '</td>';
            echo '<td>' . $result['guest_name'] . '</td>';
            echo '<td>' . $result['payment_method'] . '</td>';
            echo '<td>' . $result['amount'] . '</td>';
            echo '<td><a href="#">Edit</a></td>';
            echo '<td><a href="#">Delete</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</body>

</html>