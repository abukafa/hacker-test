<?php

function SearchingChallenge($str)
{
    $length = strlen($str);
    $longest_palindrome = "";
    // Variabel $length diinisialisasi dengan panjang string $str menggunakan fungsi strlen. Variabel $longest_palindrome diinisialisasi dengan string kosong, yang akan digunakan untuk menyimpan substring palindrom terpanjang.

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            $substring = substr($str, $i, $j - $i + 1);
            // Dua perulangan nested digunakan untuk memeriksa setiap substring dalam string. Perulangan pertama menentukan posisi awal substring dan perulangan kedua menentukan posisi akhir substring. Kita menggunakan fungsi substr untuk memotong substring dari posisi awal hingga akhir.

            if ($substring == strrev($substring) && strlen($substring) > strlen($longest_palindrome)) {
                $longest_palindrome = $substring;
            }
        }
    }
    // Kita memeriksa apakah substring tersebut palindrom atau tidak dengan membandingkan substring dengan string yang sudah dibalik menggunakan fungsi strrev. Jika substring adalah palindrom dan lebih panjang dari substring palindrom terpanjang yang sudah ditemukan sebelumnya, kita perbarui variabel $longest_palindrome dengan substring palindrom yang baru.

    if (strlen($longest_palindrome) > 2) {
        return $longest_palindrome;
    } else {
        return "none";
    }
}

// Akhirnya, jika kita menemukan substring palindrom terpanjang yang lebih dari 2 karakter, maka kita mengembalikan substring tersebut. Jika tidak ada substring palindrom yang lebih panjang dari 2 karakter, kita mengembalikan string "none".
// $contoh = SearchingChallenge('abracecars');
// echo $contoh;

?>

<form action="" method="post">
    <div class='mb-2' style='padding: 0.5rem;display:inline-block;'>
        <label class='form-label' for='input'>Input : </label>
        <input type='text' class='form-control' name='input' id='input' placeholder='abracecars'>
        <button type="submit" name="send">Send</button>
        <hr>
        <?php
        if (isset($_POST['send'])) {
            $input = $_POST['input'];
            echo SearchingChallenge($input);
        }
        ?>
    </div>
</form>