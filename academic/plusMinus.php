<?php

function plusMinus($arr)
{
    // Write your code here
    $posi = 0;
    $nega = 0;
    $zero = 0;

    foreach ($arr as $item) {
        if ($item > 0) {
            $posi++;
        } else if ($item < 0) {
            $nega++;
        } else {
            $zero++;
        }
    }

    $posiRatio = $posi / count($arr);
    $negaRatio = $nega / count($arr);
    $zeroRatio = $zero / count($arr);

    printf("%.6f\n", $posiRatio);
    printf("%.6f\n", $negaRatio);
    printf("%.6f\n", $zeroRatio);
}

$array = [-4, 3, -9, 0, 4, 1];
plusMinus($array);
