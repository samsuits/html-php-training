<?php
include 'db-connection.php';

// match passwords
$password         = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password)
{
    echo 'Passwords do not match. Please try again.';
    echo '<br/><br/>';
    echo '<a href="registration.html">Try again</a><br/>';
    exit(0);
}

$name   = $_POST['name'];
$email  = $_POST['email'];
$mobile = $_POST['mobile'];

// password hashing
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$hashed_password')";

$result = $conn->query($sql);

if ($result == true)
{
    echo 'User successfully created.<br/>';
    echo '<br/><br/><a href="login.html">Login</a>';

}
else
{
    echo 'Error in user creation';
}

?>