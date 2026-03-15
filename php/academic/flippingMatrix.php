<?php

function flippingMatrix($matrix)
{
    $n = count($matrix) / 2;
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            // Calculate the maximum element in the 4 quadrants
            $max_element = max(
                $matrix[$i][$j],
                $matrix[$i][2 * $n - $j - 1],
                $matrix[2 * $n - $i - 1][$j],
                $matrix[2 * $n - $i - 1][2 * $n - $j - 1]
            );
            // Update the sum
            $sum += $max_element;
        }
    }
    return $sum;
}

$matrix = array(
    array(112, 42, 83, 119),
    array(56, 125, 56, 49),
    array(15, 78, 101, 43),
    array(62, 98, 114, 108)
);
echo flippingMatrix($matrix); // Output: 414
