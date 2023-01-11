<?php
function insert()
{
    $array[] = [
        'id' => 3,
        'name' => 'Abu Kafa',
        'phone' => '08123456789'
    ];

    file_put_contents('data.json', json_encode($array));
}
