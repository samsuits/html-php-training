<?php
  if(isset($_POST['submit']))
  {
    $dob=$_POST['dob'];
    $current=$_POST['current'];

    //function for age calculation
    $age=date_diff(date_create($dob),date_create($current));

    echo  "your age is:" .$age->y;

    
  }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>age calculator</title>

    <style> 
    body{
      font-family:Arial;
      background-color:lightgray;
     }
      input[type="submit"]
      {
        background-color:green;
        color:white;
        padding:10px;
        border:none;
        border-radius:5px;
        cursor:pointer;
        margin-top:10px;
      }
      
      </style>
</head>
<body>

    <center>
        <form action="" method="POST">
      <h1>Age Calculator</h1>
    <label> Date of Birth</label>
     <input type="date" name="dob"><br/><br/>
     <label>Current Date</label>
     <input type="date" name="current"><br/><br/>
     <input type="submit" name="submit" value="calculate age" ><br/><br/>
      
       </form>
    </center>
</body>
</html>