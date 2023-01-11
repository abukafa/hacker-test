<?php
// Koneksi Database 
$conn = mysqli_connect("localhost", "root", "", "db_inv");

// Fungsi query database
function myquery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi generate inv number
function invoice_num()
{
    $chars = "0123456789";
    srand((float)microtime() * 1000);
    $i = 0;
    $pass = '';
    while ($i <= 7) {
        $num = rand() % 10;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}

// READ data vendor
if (isset($_GET['getVendor'])) {
    $query = 'SELECT * FROM vendor';
    echo json_encode(myquery($query));
}

// READ data invoice
if (isset($_GET['getInvoice'])) {
    $id = $_GET['getInvoice'];
    if ($id == '') {
        $query = 'SELECT invoice.*, SUM(items.amount) as total FROM invoice LEFT JOIN items ON invoice.id=items.invoice_id GROUP BY invoice.id';
    } else {
        $query = 'SELECT invoice.*, vendor.name FROM invoice LEFT JOIN vendor ON invoice.for_id=vendor.id WHERE invoice.id=' . $id;
    }
    echo json_encode(myquery($query));
}

// READ data items
if (isset($_GET['getItems'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = 'SELECT * FROM items WHERE id=' . $id;
    } else {
        $id = $_GET['getItems'];
        $query = 'SELECT items.*, invoice.*, items.id as id, invoice.id as inv, vendor.name, vendor.address FROM items LEFT JOIN invoice ON items.invoice_id=invoice.id LEFT JOIN vendor ON invoice.for_id=vendor.id WHERE items.invoice_id=' . $id;
    }
    echo json_encode(myquery($query));
}

// CREATE data invoice & items
if (isset($_GET['create'])) {
    $id = $_POST['id'];
    $issue = $_POST['issue'];
    $due = $_POST['due'];
    $subject = $_POST['subject'];
    $from = $_POST['from'];
    $for = $_POST['for'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    if (isset($_POST['save'])) {
        mysqli_query($conn, "INSERT INTO invoice VALUES('$id', '$issue', '$due', '$subject', '$from', '$for')");
        mysqli_query($conn, "INSERT INTO items VALUES('', '$id','$type', '$description', '$quantity', '$price', '$amount')");
    } else if (isset($_POST['update'])) {
        mysqli_query($conn, "UPDATE invoice SET issue_date='$issue', due_date='$due', `subject`='$subject', `from`='$from', for_id='$for' WHERE id='$id'");
    }
    header("Location: items.php?inv={$id}");
}

// UPDATE data items
if (isset($_GET['update'])) {
    if (isset($_POST['save'])) {
        $id = $_POST['e_id'];
        $inv = $_POST['e_invoice'];
        $type = $_POST['e_type'];
        $description = $_POST['e_description'];
        $quantity = $_POST['e_quantity'];
        $price = $_POST['e_price'];
        $amount = $_POST['e_amount'];
        $item = "UPDATE items SET type='$type', description='$description', quantity='$quantity', price='$price', amount='$amount' WHERE id='$id'";

        mysqli_query($conn, $item);
        header("Location: items.php?inv={$inv}");
    }
}

// DELETE data items
if (isset($_GET['delItem'])) {
    $id = $_GET['delItem'];
    $inv = $_GET['inv'];
    $query = "DELETE FROM `items` WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: items.php?inv={$inv}");
}
