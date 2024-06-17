<?php

$hostname = 'localhost';
$user     = 'root';
$password = '';

$conn = mysqli_connect($hostname, $user, $password);

if ($conn)
{
    echo 'DB Connection Successful';
}
else
{
    echo 'DB Connectio failed';
}