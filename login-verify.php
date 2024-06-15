<?php
// connect database
include 'db-connection.php';

echo '<h1>Submitted values</h1>';
echo 'name is: ' . $_POST['name'];
echo "<br/>";
echo 'semester is: ' . $_POST['semester'];
echo "<br/>";



echo "<br/>";
echo "<br/>";

$name = $_POST['name'];
$semester = $_POST['semester'];


$query = "SELECT * FROM student_login WHERE name ='$name' AND semester ='$semester';";


$result = $conn->query($query);


if ($result->num_rows > 0)
{
    echo 'login success';
}
else
{
    echo 'incorrect details';
}