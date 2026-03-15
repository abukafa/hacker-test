<?php

// $nums = array(3, 2, 5, 3);
// $target = 6;
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
// print_r(cari($nums, $target));
// echo "<br>";

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

?>

<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='input'>Input : </label>
        <input type='text' class='form-control' name='nums' id='nums' placeholder='nums'>
        <input type='text' class='form-control' name='target' id='target' placeholder='target'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $nums = explode(',', $_POST['nums']);
            $target = $_POST['target'];
            $result = twoSum($nums, $target);
            print_r($result);
        }
        ?>
    </div>
</form>