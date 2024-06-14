<?php
include 'db-connection.php';

$name = $_POST['name'];
$gender=$_POST['gender'];
$semester=$_POST['semester'];
$mobileNo=$_POST['mobileno'];
$address=$_POST['address'];

$sql="INSERT INTO `students` ( `name`, `gender`, `semester`, `mobileno`, `address`) VALUES ( $name, $gender, $semester, $mobileNo, $address)";

    /*<$sql = "INSERT INTO
        login-system
        (name, gender, semester,mobileno, address)
        VALUES ('" . $name . "', '" . $gender. "','" . $semester . "', '" . $mobileno . "', '" . $address . "');";
        $result=$conn->query($sql);

        if($result == true)
        {
            echo 'user created';
            echo'<br/><a href="login.html">Click here to login<a>';

        }
        else
        {
            echo "Error";
         }
?>*/