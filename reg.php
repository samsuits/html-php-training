<?php

// connection establishment
include 'db-connection.php';
<<<<<<< HEAD
$name = $_POST['name'];
$gender = $_POST['gender'];
$semester = $_POST['semester'];
$mobile = $_POST['phone'];
$address = $_POST['address'];
=======
$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Semester = $_POST['semester'];
$Mobile = $_POST['phone'];
$Address = $_POST['address'];
>>>>>>> fed160f3ae596c927dd0ab1745cf53688a4d9ffb

$sql = "INSERT INTO
        student_login
        (name,gender,semester,mobile,address)
        VALUES ('$name','$gender','$semester','$mobile','$address');";

$result = $conn->query($sql);

if ($result == true)
{
    echo 'New student created';

}
else
{
    echo 'Error';
}