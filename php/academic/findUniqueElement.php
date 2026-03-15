<?php

function findUniqueElement($arr)
{
    // Initialize a variable to store the result
    $result = 0;

    // Iterate over the array and XOR each element with the result
    foreach ($arr as $num) {
        $result ^= $num;
    }

    // The result will contain the unique element
    return $result;
}


echo findUniqueElement([1, 2, 3, 4, 3, 2, 1]);
