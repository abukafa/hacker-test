<?php

function MathChallenge($num)
{
    // Convert the number to an array of digits
    $digits = str_split((string)$num);

    // Find the index of the first digit from the right that is smaller than the digit to its right
    $i = count($digits) - 2;
    while ($i >= 0 && $digits[$i] >= $digits[$i + 1]) {
        $i--;
    }

    if ($i < 0) {
        // The digits are in descending order, so there is no greater permutation
        return -1;
    }

    // Find the smallest digit to the right of $i that is greater than $digits[$i]
    $j = count($digits) - 1;
    while ($digits[$j] <= $digits[$i]) {
        $j--;
    }

    // Swap the digits at indices $i and $j
    list($digits[$i], $digits[$j]) = array($digits[$j], $digits[$i]);

    // Reverse the digits to the right of index $i
    array_splice($digits, $i + 1, count($digits) - $i - 1, array_reverse(array_slice($digits, $i + 1)));

    // Convert the array of digits back to a number
    $result = (int)implode('', $digits);

    return $result;
}

// $result = MathChallenge(123);
// echo $result; // Outputs 132

?>

<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='input'>Input : </label>
        <input type='text' class='form-control' name='input' id='input' placeholder='123456'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $input = $_POST['input'];
            echo MathChallenge($input);
        }
        ?>
    </div>
</form>