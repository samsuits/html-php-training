<?php

// credentials
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

// connect
$conn = mysqli_connect($host,$username,$password,$database);

// check connection
if (!$conn)
{  
    echo 'Connection failed';
}