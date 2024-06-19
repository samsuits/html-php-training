<?php
include 'db-connection.php';


$name = $_POST["name"];
$gender=$_POST["gender"];
$semester=$_POST["semester"];
$mobileno=$_POST["mobileno"];
$address=$_POST["address"];

$sql="INSERT INTO `student` ( `name`, `gender`, `semester`, `mobileno`, `address`) VALUES ( '$name','$gender', '$semester', '$mobileno', '$address');";


        $result=$conn->query($sql);

        if($result == true)
        {
            echo 'user created';

        }
        else
        {
            echo "Error";
         }
?>