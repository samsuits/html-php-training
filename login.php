<?php
include 'db-connection.php';

$guest_email=$_POST['guest_email'];
$id=$_POST['id'];

$sql= "SELECT * FROM booking WHERE Guest Email='$guest_email'";
$result= $conn->query($sql);
if($result->num_rows > 0)
{
    $user = $result->fetch_array();

    if(password_verify($id, $user['id']))
    {
        echo 'Login success!!';
        echo '<br/>Welcome<br/>';
        setcookie('user', $guest_email, time() + 3600);
        echo '<a href="index.php">Home</a><br/>';
    }
    else
    {
        echo 'Entered incorrect id...please check';
        echo '<br/><br/><a href="login.html">Login</a>';
    }
}
else
{
    echo 'Invalid credentials. Try again';
    echo '<br/><br/><a href="login.html">Login</a>';
}