<?php

if(isset($_COOKIE['counter']))
{
    $visits = $_COOKIE['counter'];
    ++$visits;
}
else
{
    $visits = 0;
}
setcookie('counter', $visits, time() + (24 * 3600));


echo '<span style="float:right;">Total Visits : '. $visits. '</span>';
echo '<br/>';
echo '<hr/>';

?>