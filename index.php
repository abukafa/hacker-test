<?php

$nums = array(3, 2, 5, 3);
$target = 6;

// $a = array_rand($nums);
// $b = array_rand($nums);

// $con = [$a, $b];
// print_r($con);

// $count = $nums[$a] + $nums[$b];
// if ($count == $target) {
//     echo $count;
//     echo "<br>";
//     echo "[" . $a . ',' . $b . "]";
// }

function cari($nums, $target)
{
    $count = 0;
    $result = [];
    for ($i = 0; $i <= $result; $i++) {
        $fir = array_rand($nums);
        $sec = array_rand($nums);
        $a = $nums[$fir];
        $b = $nums[$sec];
        $count = $a + $b;
        if ($count == $target && $fir <> $sec) {
            $result = [$fir, $sec];
            break;
        }
    }

    return $result;
}
print_r(cari($nums, $target));
echo "<br>";


function twoSum($nums, $target)
{
    $temp = [];
    foreach ($nums as $key => $value) {
        if (!isset($temp[$value])) {
            $temp[$value] = $key;
        }
        $complement = $target - $value;
        if (isset($temp[$complement]) && $temp[$complement] !== $key) {
            return [$temp[$complement], $key];
        }
    }
    return [];
}
print_r(twoSum($nums, $target));
