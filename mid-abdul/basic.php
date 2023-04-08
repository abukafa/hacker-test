<?php

// Create a php function that prints the value of a digit depending on its place or position from the following string "9.327.421"!
function printDigitValue($number)
{
    $digits = str_split(str_replace('.', '', $number)); // remove dots and split into an array
    $length = count($digits);
    for ($i = 0; $i < $length; $i++) {
        $placeValue = pow(10, $length - $i - 1);
        echo $digits[$i] * $placeValue . "<br/>";
    }
}
echo '<h3>Print Digit Values</h3>';
printDigitValue('9.327.421');


// Print Number Triangle
function triangleNums()
{
    for ($i = 1; $i <= 9; $i++) {
        for ($j = $i; $j <= 9; $j++) {
            echo $j . " ";
        }
        echo "<br/>";
    }
}
echo '<h3>Print Triangle Numbers</h3>';
triangleNums();

// Given a number n, return the number of positive odd numbers below n!
function oddCount($n)
{
    $odds = array();
    for ($i = 1; $i < $n; $i += 2) {
        array_push($odds, $i);
    }
    return implode(", ", $odds);
}
echo '<h3>Print Odd Numbers</h3>';
echo oddCount(15);
