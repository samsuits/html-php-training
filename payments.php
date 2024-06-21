<?php

// connection establishment
include 'db-connection.php';

$payment_date = $_POST['payment_date'];
$guest_name = $_POST['guest_name'];
$payment_method = $_POST['payment_method'];
$amount = $_POST['amount'];

$sql = "INSERT INTO
        payments
        (payment_date,guest_name,payment_method,amount)
        VALUES ('$payment_date','$guest_name','$payment_method ','$amount');";

$result = $conn->query($sql);

if ($result == true)
{
    echo '<h2> new payment details </h2>';

}
else
{
    echo 'Error';
}