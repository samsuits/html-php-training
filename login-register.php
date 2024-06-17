<?php
 
 include 'db-connection.php';
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $semester = $_POST['semester'];
 $address = $_POST['address'];
 $mobileno = $_POST['mobileno'];


 $sql = "INSERT INTO
 student1
 (name,gender,semester,address,mobileno)
 values ( '$name','$gender','$semester'.'$address','$mobileno')";
$result = $conn->query($sql);

if ($result == true)
{
echo 'New student created';

}
else
{
echo 'Error';
}