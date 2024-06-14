<?php
$host='localhost';
$username='root';
$password='';
$database='login-system';
#building connection
$conn=mysqli_connect($host,$username,$password,$database);
#checking whether connection is built
if($conn)
{
    echo 'connection successful';
}
else{
    echo "Connection failed";
}
?>