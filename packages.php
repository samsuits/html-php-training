<?php
  
include 'db-connection.php';



$package_name  = $_POST['name'];
$package_price = $_POST['price'];
$start_date    = $_POST['start'];
$end_date      = $_POST['end'];

$sql = "INSERT INTO 
        packages
        (package_name,package_price,start_date,end_date)
         VALUES ('$package_name','$package_price','$start_date','$end_date');";

$result = $conn->query($sql);


if($result == true)
{
    echo 'New Package Registered';
}
else
{
    echo 'error';
}

?>