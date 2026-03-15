<?php
// Load Data
$data = file_get_contents('data.json');
// READ - Decode to Array
$array = json_decode($data, true);
// CREATE
if (isset($_GET['add'])) {
    $array[] = [
        'id' => $_GET['add'],
        'name' => $_GET['name'],
        'phone' => $_GET['phone']
    ];
    // encode to json and save
    file_put_contents('data.json', json_encode($array, JSON_PRETTY_PRINT));
}
// UPDATE
if (isset($_GET['up'])) {
    foreach ($array as $key => $val) {
        if ($val['id'] == $_GET['up']) {
            $array[$key]['name'] = $_GET['name'];
            $array[$key]['phone'] = $_GET['phone'];
        }
    }
    // encode to json and save
    file_put_contents('data.json', json_encode($array, JSON_PRETTY_PRINT));
}
// DELETE
if (isset($_GET['del'])) {
    // $key = array_search($_GET['del'], array_column($array, 'id'));
    // unset($array[$key]);
    $index = [];
    foreach ($array as $key => $val) {
        if ($val['id'] == $_GET['del']) {
            $index[] = $key;
        }
        foreach ($index as $i) {
            unset($array[$i]);
        }
    }
    file_put_contents('data.json', json_encode($array, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
</head>

<body>
    <h1>Contact App</h1>
    <!-- <input type="text">
    <button onclick="insert()">Insert</button>
    <button>Update</button>
    <button>Delete</button> -->
    <?php
    // foreach ($array as $key => $value) {
    //     echo $array[$key] . ' - ' . $array[$value] . '<br>';
    // }
    // echo '<br>';
    if ($array <> []) {
        foreach ($array as $a) :
    ?>

            <ul>
                <li><?= $a['id'] ?></li>
                <li><?= $a['name'] ?></li>
                <li><?= $a['phone'] ?></li>
            </ul>

    <?php endforeach;
    } else {
        echo '<br><br>Tidak ada Data!';
    } ?>

</body>

</html>