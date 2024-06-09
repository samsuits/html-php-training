<?php

include 'functions.php';

echo 'Today is : '. getTodaysDate();

if (isset($_GET['submit']))
{
   greetUser($_GET['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet User</title>
</head>
<body>
    <h1>Please type your name</h1>

    <form action="" method="get">
        name: <input type="text" name="name">
        <br/>
        <br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>