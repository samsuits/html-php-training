<?php

$host = 'localhost';
$username= 'root';
$password= '';
$database='php sql ';

$conn=mysqli_connect($host,$username,$password);
if($conn)
{
    echo 'connection sucess!!';
}
else
{
    echo 'connection failed';
}