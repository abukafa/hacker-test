<?php

function findMedian($arr)
{
    // Write your code here
    sort($arr);

    $con = count($arr);
    $mid = floor($con / 2);

    if ($con % 2 == 0) {
        $median = ($arr[$mid - 1] + $arr[$mid]) / 2;
    } else {
        $median = $arr[$mid];
    }

    echo $median;
}

$data = [4, 5, 2, 6, 8, 1, 2];
findMedian($data);
