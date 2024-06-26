<?php
session_start();

    unset($_SESSION['user']);
    echo '<a href="index.php">Home</a><br/>';

?>