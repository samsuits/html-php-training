<?php
include 'db-connection.php';


$room_name = $_POST["room_name"];
$bed_type=$_POST["bed_type"];
$ac_type=$_POST["ac_type"];
$price=$_POST["price"];

$sql="INSERT INTO `room` ( `room_name`, `bed_type`, `ac_type`, `price`) VALUES ( '$room_name','$bed_type', '$ac_type', '$price');";


        $result=$conn->query($sql);

        if($result == true)
        {
            echo 'customer registered';

        }
        else
        {
            echo "Error";
         }
?>