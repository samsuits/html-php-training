<?php
if(isset($_POST['answer']))
{
    $correctanswer="prime minister";
    $givenanswer=$_POST['answer'];
    $totalmarks=($givenanswer==$correctanswer)? 1 : 0;
    
    echo "YOUR SCORE: $totalmarks out of 1";
}
?>