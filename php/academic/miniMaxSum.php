<?php

function miniMaxSum($arr)
{
    // Write your code here
    $min = 0;
    $max = 0;

    sort($arr);

    for ($i = 0; $i < 4; $i++) {
        $min += $arr[$i];
    }

    $con = count($arr);
    for ($i = $con - 1; $i >= $con - 4; $i--) {
        $max += $arr[$i];
    }

    echo $min . ' ' . $max;
}

$array = [1, 2, 3, 4, 5];
miniMaxSum($array);
