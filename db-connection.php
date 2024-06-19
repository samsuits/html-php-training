<?php

$hostname = 'localhost';
$user     = 'root';
$password = '';
$database = 'login';

$conn = mysqli_connect($hostname, $user, $password, $database);

if (!$conn)
{
    echo 'DB Connectio failed';
}