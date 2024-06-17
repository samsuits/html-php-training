<?php

$hostname = 'localhost';
$user     = 'root';
$password = '';

$conn = mysqli_connect($hostname, $user, $password);

if ($conn)
{
    echo 'Success';
}
else
{
    echo 'failed';
}