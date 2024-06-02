<?php
$age=0;
if (isset($_POST["submit"]))
{
    $dateofbirth=$_POST["dob"];
    $currentdate=date('Y-m-d');
    $age = date_diff(date_create($dateofbirth),date_create($currentdate))->y;
}
    echo "YOU ARE " . $age . " YEARS OLD.";

?> 