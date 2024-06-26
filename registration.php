<?php
include 'db-connection.php';

$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$semester=$_POST['semester'];
$contact_number=$_POST['contact_number'];


$sql="INSERT INTO `student_details`(`Name`, `Id`, `Email`, `Gender`, `Department`, `Semester`, `Contact number`) VALUES ('$name','$id','$email','$gender','$department','$semester','$contact_number');";

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