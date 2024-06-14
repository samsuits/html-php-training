<?php
// connect database
include 'db-connection.php';

echo '<h1>Subbmited values</h1>';
echo 'Name is : ' . $_POST['name'];
echo "<br/>";
echo 'semeste is : ' . $_POST['semester'];

echo "<br/>";
echo "<br/>";

$name = $_POST['name'];
$password = $_POST['semester'];

$query = "SELECT * FROM user WHERE name = '" . $name . "' AND semester = '" . $semester . "';";

$result = $conn->query($query);


if ($result->num_rows > 0)
{
    echo 'login success';
}
else
{
    echo 'incorrect email or password';
}