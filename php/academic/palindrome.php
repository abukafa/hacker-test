<?php
function Palindrome($MyString)
{
    $l = 0;
    $r = strlen($MyString) - 1;
    $flag = 0;

    while ($r > $l) {
        if ($MyString[$l] != $MyString[$r]) {
            $flag = 1;
            break;
        }
        $l++;
        $r--;
    }

    if ($flag == 0) {
        echo $MyString . " is a Palindrome string.\n";
    } else {
        echo $MyString . " is NOT a Palindrome string.\n";
    }
}
?>

<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='string'>String : </label>
        <input type='text' class='form-control' name='string' id='string' placeholder='malam'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $string = $_POST['string'];
            echo Palindrome($string);
        }
        ?>
    </div>
</form>