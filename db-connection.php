<?php

// credentials
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'login_system';

// connect
$conn = mysqli_connect($host, $username, $password, $database);

// check connection
if ($conn)
{

}
else
{
    echo 'Connection failed';
}
