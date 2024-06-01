<?php

echo "YOU HAVE REGISTERED SUCCESSFULLY!!";
echo "<br/>";
echo "<br/>";
echo "Submitted Information:";
echo "<br/>";
echo "<br/>";
echo 'Name of the user -->' . $_POST["username"];
echo "<br/>";
echo "<br/>";
echo 'Password is ' . $_POST["password"];
echo "<br/>";
echo "<br/>";
echo 'Depatment of the user :' . $_POST["department"];
echo "<br/>";
echo 'Address of the user :' . $_POST["address"];
echo "<br/>";
echo 'DOB:' . $_POST["dob"];
echo "<br/>";
echo "<br/>";
echo 'contact number:' . $_POST["contact_number"];
?>