<?php

include 'db-connection.php';
if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
$deleteSql = "DELETE FROM students WHERE id=?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: registation_users.php"); 
exit;
}
?>
