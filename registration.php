<?php

// connection establishment
include 'db-connection.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$semester = $_POST['semester'];
$mobile = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO
        new_student
        (name,gender,semester,mobile,address)
        VALUES ('$name','$gender','$semester','$mobile','$address');";

$result = $conn->query($sql);

if ($result == true)
{
    echo '<h2>New student created</h2>';

}
else
{
    echo 'Error';
}