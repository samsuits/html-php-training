<?php

$hostname = 'localhost';
$user     = 'root';
$password = '';
$database = 'login';

$conn = mysqli_connect($hostname, $user, $password, $database);

if ($conn)
{
    echo 'Success';
}
else
{
    echo 'failed';
}