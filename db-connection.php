<?php

$hostname='localhost';
$user='root';
$password='';

$conn = mysqli_connect($hostname,$user,$password);

if($conn)
{
    echo 'DB connection successful';
}
else
{
  echo 'DB connection failed';
}