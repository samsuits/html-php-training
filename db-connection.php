<?php

// credentials
$host= 'localhost:3307';
$username = 'root';
$password = '';
$database = 'login';

// connect
$conn = mysqli_connect($host, $username, $password, $database);

// check connection
if ($conn)
{
   echo '<h1>Connection success</h1>';
}
else
{
    echo 'Connection failed';
}
?>