<?php
// connect database
include 'db-connection.php';

echo '<h1>Subbmited values</h1>';
echo 'email is : ' . $_POST['email'];
echo "<br/>";
echo 'password is : ' . $_POST['password'];

echo "<br/>";
echo "<br/>";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '" . $email . "' AND password = '" . $password . "';";

$result = $conn->query($query);


if ($result->num_rows > 0)
{
    echo 'login success';
}
else
{
    echo 'incorrect email or password';
}





