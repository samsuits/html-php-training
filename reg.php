<?php

// connection establishment
include 'db-connection.php';
$Id = $_POST['id'];
$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Semester = $_POST['semester'];
$Mobile = $_POST['phone'];
$Address = $_POST['address'];

$sql = "INSERT INTO
        student_login
        (Id,Name,Gender,Semester,Mobile,Address)
        VALUES ('Id','Name','Gender','Semester','Mobile','Address');";

$result = $conn->query($sql);

if ($result == true)
{
    echo 'New user created';
    echo '<br/><a href="login.html">Click here to login</a>';

}
else
{
    echo 'Error';
}