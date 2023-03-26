<?php

function timeConversion($s)
{
    // Write your code here
    $time = date("H:i:s", strtotime($s));

    echo $time;
}


$time = "12.01.02 AM";
timeConversion($time);
