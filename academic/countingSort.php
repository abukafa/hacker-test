<?php

function countingSort($arr)
{
    // Find the maximum value in the array
    $max = max($arr);

    // Initialize the counting array with zeros
    $count = array_fill(0, $max + 1, 0);

    // Count the occurrences of each element in the array
    foreach ($arr as $num) {
        $count[$num]++;
    }

    // Generate the sorted array
    $sortedArr = array();
    for ($i = 0; $i <= $max; $i++) {
        for ($j = 1; $j <= $count[$i]; $j++) {
            $sortedArr[] = $i;
        }
    }

    return $sortedArr;
}

$arr = array(1, 3, 2, 1, 2, 4);
$sortedArr = countingSort($arr);
print_r($sortedArr); // Output: Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 2 [4] => 3 [5] => 4 )


function countFrequency($arr)
{
    $freq = array_fill(0, 100, 0); // create an array of size 100, initialized with 0
    foreach ($arr as $num) {
        $freq[$num]++; // increment the count for the current number
    }
    return $freq;
}

$input = "63 25 73 1 98 73 56 84 86 57 16 83 8 25 81 56 9 53 98 67 99 12 83 89 80 91 39 86 76 85 74 39 25 90 59 10 94 32 44 3 89 30 27 79 46 96 27 32 18 21 92 69 81 40 40 34 68 78 24 87 42 69 23 41 78 22 6 90 99 89 50 30 20 1 43 3 70 95 33 46 44 9 69 48 33 60 65 16 82 67 61 32 21 79 75 75 13 87 70 33";
$arr = array_map('intval', explode(' ', $input)); // convert input string to array of integers
$freq = countFrequency($arr);
echo implode(' ', $freq); // output the frequency count as a space-separated string
