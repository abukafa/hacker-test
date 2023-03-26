<?php

function fizzBuzz($n)
{
    // Write your code here
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Fizzbuzz\n";
        } else if ($i % 3 == 0) {
            echo "Fizz\n";
        } else if ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo $i . "\n";
        }
    }
}

fizzBuzz(15);
