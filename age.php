<?php
     if(isset($_POST['submit']))
     {
        $_dob=$_POST['dob'];
        $_current=$_POST['current'];


        $_age=date_diff(date_create($_dob),date_create($_current));

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <form action="" method="POST">
    <h1>Age Calculator</h1>
    <label>BirthDate</label>
    <input type="date" name="dob" placeholder="Enter your date of birth">
    </br>
    </br>
    <label>CurrentDate</label>
    <input type="date" name="current" placeholder="Enter current date">
    </br>
    </br>
    <input type="submit" name="submit" value="Calculate My Age">
    <input type="text" value="<?php echo"Age is: ", $_age->format("%y")?>" readonly>
    </form>
</body>
</html>