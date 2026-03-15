<?php

function ArrayChallenge($strArr)
{

    // Menghapus karakter selain huruf pada setiap string dan memecah string menjadi array dengan explode()
    foreach ($strArr as $index => $string) {
        $strArr[$index] = preg_replace('/[^a-zA-Z]/', '', $string);
    }

    // Mengurutkan array secara menurun (terbesar ke terkecil) berdasarkan jumlah karakter dalam string
    usort($strArr, function ($a, $b) {
        return strlen($b) - strlen($a);
    });

    // Mengambil elemen ketiga dalam array, yaitu kata dengan urutan ketiga dalam urutan menurun jumlah karakter
    return $strArr[2];
}

// echo ArrayChallenge(["hello", "world", "before", "all"]); // Output: world
// echo ArrayChallenge(["hello", "world", "after", "all"]); // Output: after

?>

<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='input'>Input : </label>
        <input type='text' style='width:200%;display:inline-block;' name='input' id='input' placeholder='"hello", "world", "before", "all"'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $input = $_POST['input'];
            $strArr = explode(",", $input);
            echo ArrayChallenge($strArr);
        }
        ?>
    </div>
</form>