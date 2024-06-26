<?php
session_start();
include 'utilities/visit-counter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projects</title>
</head>
<body>
     <!-- show login and registration to all users -->
    <?php
        if (isset($_SESSION['user']))
        {
            echo '<a href="register/registered-users.php">Users</a><br/>';
            echo '<a href="login/logout.php">Logout</a><br/>';
        }
        else
        {
            echo '<a href="forms/registration.html">Registration</a><br/>
            <a href="forms/login.html">Login</a><br/>';
        }
    ?>


    <!-- // display users link to logged in users -->
</body>
</html>