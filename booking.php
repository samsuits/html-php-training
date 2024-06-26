<?php
include 'db-connection.php';

$id          =$_POST['id'];
$booking_date=$_POST['booking_date'];
$guest_name  =$_POST['guest_name'];
$guest_email =$_POST['guest_email'];
$guest_mobile=$_POST['guest_mobile'];
$no_of_people=$_POST['no_of_people'];

$sql="INSERT INTO `booking`(`id`, `Booking Date`, `Guest Name`, `Guest Email`, `Guest Mobile`, `No Of People`) VALUES ('$id','$booking_date','$guest_name','$guest_email','$guest_mobile','$no_of_people');"; 

$result=$conn->query($sql);
    
if($result == true)
{
    echo "Online Booking Successful";
    echo '<br/><br/><a href="verify-booking.php">your details:</a>';
}
else    
{
    echo "Error";
 }
?>

