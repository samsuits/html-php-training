<?php

/**
 * Date and time
 * e.g., 09-06-2024
 * 09-Jun-2024
 * 9-6-24
 * 9-6-2024
 */

date_default_timezone_set('UTC');



// echo 'Today is :' . date('d-m-Y');
// echo '<br/><br/>';

// echo '<br/><br/>';
// echo 'current date and time is :' . date('r');

// echo '<br/><br/>';
$current_timestamp = time();
echo 'cureent timestamp :' . $current_timestamp;
echo '<br/><br/>';
echo 'total seconds 5 days ago : ' . $current_timestamp - (60 * 60 * 24 * 5);

echo '<br/><br/>';
echo 'date 1 month ago : '. date('d-M-Y',  $current_timestamp - (60 * 60 * 24 * 30));

$birth_date = '09-06-1994';

// print 9th Jun 1995
echo '<br/><br/>';
//echo 'birth date is : '.  date('dS M Y', strtotime($birth_date));

$today = date('Y-m-d');

$total_seconds = strtotime($today) - strtotime($birth_date);

echo 'birth date: '. $birth_date;
echo '<br/><br/>';
echo 'My age in years : ' . $total_seconds / (365 * 24 * 60 * 60) ;
echo '<br/><br/>';

//starting point 1st jan 1970

//echo 'time :' . strtotime('1970-01-01 00:00:00');

// $recharge_date = '09-05-2024';

// $today = date('Y-m-d');

// $recharge_date_seconds = strtotime($recharge_date);
// $today_in_seconds = strtotime($today);

// $total_seconds = $today_in_seconds - $recharge_date_seconds;

// $seconds_in_a_day = 24 * 60 * 60;



// echo 'recharge date in seconds : '. $recharge_date_seconds;
// echo '<br/><br/>';
// echo 'todays date in seconds : '. $today_in_seconds;
// echo '<br/><br/>';
// echo 'total seconds between today and recharge date : '. $total_seconds;
// echo '<br/><br/>';
// echo 'total days between today and recharge date : '. $total_seconds / $seconds_in_a_day ;



// recharge 171,51,26,400
// ---how-may-days
// today    171,78,91,200
