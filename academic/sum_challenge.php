<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='input'>Input : </label>
        <input type='text' class='form-control' name='input' id='input' placeholder='4, 5, -2, 3, 1, 2, 6, 6'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $input = explode(',', $_POST['input']);
            echo ArrayChallenge($input);
        }
        ?>
    </div>
</form>

<?php

function ArrayChallenge($arr)
{
    $num_elements = count($arr);
    if ($num_elements < 4) {
        return array_sum($arr);
    }
    rsort($arr); // sort the array in descending order
    $sum = 0;
    for ($i = 0; $i < 4; $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

// $result = ArrayChallenge([4, 5, -2, 3, 1, 2, 6, 6]);
// echo $result; // Output: 21

?>