<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
            if (isset($_COOKIE['user']))
            {
                echo '<a href="reg-retrieve.php">Users</a><br/>';
                echo '<a href="package-list.php">Packages</a><br/>';
                echo '<a href="logout.php">Logout</a><br/>';
            }
            else
            {
                echo '<a href="registration.html">Registration</a><br/>
                <a href="login.html">Login</a><br/>';
            }
 ?>
</body>
</html>