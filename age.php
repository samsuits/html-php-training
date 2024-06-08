<?php 
if (isset($_POST['calculate'])) {
    $dob = $_POST['dob'];
    $dobDate = date_create($dob);
    $todayDate= date_create('today');

    if ($dobDate > $todayDate) {
        echo 'Invalid date. The date of birth cannot be in the future.';
    } else {
        $age = date_diff($dobDate, $todayDate);
        echo 'You are ' . $age->format('%y') . ' years old.';
    }
}
?>
