<?php
session_start();
include 'db-connection.php';
include 'visit-counter.php';
$email    = $_POST['email'];
$password = $_POST['password'];

// validate user

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $user = $result->fetch_array();

    if (password_verify($password, $user['password']))
    {
        echo 'Login success!!';
        echo '<br/>Welcome<br/>';
        $_SESSION['user'] = $user['name'];
        echo '<a href="index.php?login=true">Home</a><br/>';
    }
    else
    {
        echo 'Entered incorrect password';
        echo '<br/><br/><a href="login.html">Login</a>';
    }
}
else
{
    echo 'Invalid credentials. Try again';
    echo '<br/><br/><a href="login.html">Login</a>';
}

