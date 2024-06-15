<?php

// connection establishment
include 'db-connection.php';
$name = $_POST['name'];
$gender = $_POST['gender'];
$semester = $_POST['semester'];
$mobile = $_POST['phone'];
$address = $_POST['address'];

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