<?php

// require_once 'Produk.php';
// require_once 'Komik.php';
// require_once 'Game.php';

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});
