<?php
echo "Successfully Submited";
echo "</br>";
echo "</br>";
echo "Here we goo!!";
echo "</br>";
echo "</br>";
 echo 'Your name is : ' . $_POST['username'];
 echo "</br>";
 echo "</br>";
 echo 'email : ' . $_POST['email'];
 echo "</br>";
 echo "</br>";
 echo 'Gender : ' . $_POST['gender'];
 echo "</br>";
 echo "</br>";
 echo 'Education : ' . $_POST['education'];
 echo "</br>";
 echo "</br>";
 echo 'Hobbies : ';

 if (isset($_POST['hobbies']))
 {
    echo implode(', ', $_POST['hobbies']);
 }
 else
 {
    echo 'n/a';
 }

 echo "</br>";
 echo "</br>";
 echo 'Passport : ';

 if (isset($_POST['passport']))
 {
    echo 'yes';
 }
 else
 {
    echo 'n/a';
 }

 echo "</br>";
 echo "</br>";
 echo 'location : ' . $_POST['city'];
 echo "</br>";
 echo "</br>";
 echo 'about me: ' . $_POST['about_me'];

?>
