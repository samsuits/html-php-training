<?php

$host = 'localhost';
$username  = 'root';
$password = '';
$database = 'login_system';

$conn = mysqli_connect($host, $username, $password,$database);

if ($conn)
{
    echo 'DB Connection Successful';
}
else
{
    echo 'DB Connection failed';
}