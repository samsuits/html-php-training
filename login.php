<?php
include 'db-connection.php';

$email    = $_POST['email'];
$password = $_POST['password'];

// validate customer

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $user = $result->fetch_array();

    if (password_verify($password, $user['password']))
    {
        echo 'Login success!!';
        echo '<br/>Welcome<br/>';
        setcookie('user', $email, time() + 3600);
        echo '<a href="index.php">Home</a><br/>';
    }
    else
    {
        echo 'Entered incorrect password';
        echo '<br/><br/><a href="login.html">Login</a>';
    }
}

{
    echo 'Invalid credentials. Try again';
    echo '<br/><br/><a href="login.html">Login</a>';
}

?>