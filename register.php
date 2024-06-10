<?php

// connect database
include 'db-connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO
        user
        (name, email, password)
        VALUES ('" . $name . "', '" . $email . "', '" . $password . "');";

$result = $conn->query($sql);

if ($result == true)
{
    echo 'New user created';
    echo '<br/><a href="login.html">Click here to login</a>';

}
else
{
    echo 'Error';
}