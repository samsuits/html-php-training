<?php

include 'db-connection.php';

$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($password != $confirm_password)
{
    echo 'passwords do not match.please try again.';
    echo '</br></br>';
    echo '<a href="registration.html">Try again</a></br>';
    exit(0);
}

$name = $_POST['name'];
$email = $_POST['email'];

$hashed_password = password_hash($password,PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hashed_password');";

$result = $conn->query($sql);

if($result == true)
{
    echo 'User successfully created.</br>';
    echo '</br></br><a href="login.html">Login</a>';

}
else
{
    echo 'Error in user creation';
}


?>