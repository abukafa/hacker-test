<?php

function smallestZigZagSequence(array $arr): array
{
    // sort the input array
    sort($arr);

    $n = count($arr);
    $k = ($n + 1) / 2;

    $res = [];
    for ($i = 0; $i < $k - 1; $i++) {
        $res[$i] = $arr[$i];
    }

    for ($i = $n - 1; $i >= $k - 1; $i--) {
        $res[$i] = $arr[$i];
    }
    return $res;
}

// example input array
$arr = [1, 2, 3, 4, 5, 6, 7];

// get the lexicographically smallest zig zag sequence
$res = smallestZigZagSequence($arr);

// print the result
echo implode(" ", $res);
