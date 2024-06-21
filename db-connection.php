<?php

$hostname='localhost';
$user='root';
$password='';
$database='users';

$conn = mysqli_connect($hostname,$user,$password,$database);

if($conn)
{
    echo '<h1>DB connection successful</h1>';
    echo '</br>';
}
else
{
  echo 'DB connection failed';
}