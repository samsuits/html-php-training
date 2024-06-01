<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $dateofbirth=$_POST["dob"];
    $currentdate=$_POST["current"];
    $age=date_diff(date_create($dateofbirth),date_create($currentdate))->y;

    echo "YOUR ARE " . $age . " YERAS OLD.";
}

?>