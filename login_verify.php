<?php
// connect database
include 'db-connection.php';

echo '<h1>Subbmited values</h1>';
echo 'Name is : ' . $_POST['name'];
echo "<br/>";
echo 'Mobileno is : ' . $_POST['mobileno'];
echo "<br/>";

$name = $_POST['name'];
$mobileNo=$_POST['mobileno'];


$query = "SELECT * FROM student1 WHERE name = '$name' AND mobileno = ' $mobileNo';";

$result = $conn->query($query);


if ($result->num_rows > 0)
{
    echo 'login success';
}
else
{
    echo 'incorrect name and phonenumber';
}