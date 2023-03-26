<?php

function diagonalDifference($matrix)
{
    // Initialize variables for the diagonal sums
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;

    // Iterate over the rows of the matrix
    for ($i = 0; $i < count($matrix); $i++) {
        // Add the element of the primary diagonal
        $primaryDiagonalSum += $matrix[$i][$i];

        // Add the element of the secondary diagonal
        $secondaryDiagonalSum += $matrix[$i][count($matrix) - $i - 1];
    }

    // Calculate the absolute difference between the diagonal sums
    $diagonalDifference = abs($primaryDiagonalSum - $secondaryDiagonalSum);

    // Return the diagonal difference
    return $diagonalDifference;
}

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$result = diagonalDifference($matrix);
echo $result; // Output: 0
