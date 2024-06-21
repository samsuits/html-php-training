<?php

$hostname = 'localhost';
$user     = 'root';
$password = '';
$database = 'users';

$conn = mysqli_connect($hostname, $user, $password, $database);

if ($conn)
{
    echo ' Registered Successfully';
}
else
{
    echo 'Please Try again!';
}