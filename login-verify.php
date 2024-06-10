<?php
// connect database
include 'db-connection.php';

echo '<h1>Subbmited values</h1>';
echo 'username is : ' . $_POST['username'];
echo "<br/>";
echo 'password is : ' . $_POST['password'];

echo "<br/>";
echo "<br/>";

$email = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT email FROM user WHERE email = '" . $email . "' AND password = '" . $password . "';";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo 'login success';
}
else
{
    echo 'incorrect username or password';
}





