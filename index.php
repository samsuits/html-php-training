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
        if (isset($_COOKIE['user']))
        {
            echo '<a href="registered-users.php">Users</a><br/>';
            echo '<a href="logout.php">Logout</a><br/>';
        }
        else
        {
            echo '<a href="registration.html">Registration</a><br/>
            <a href="login.html">Login</a><br/>';
        }
    ?>


    <!-- // display users link to logged in users -->
</body>
</html>