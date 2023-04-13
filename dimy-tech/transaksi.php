<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "store");

//mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

//mengambil data dari request
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$pay_method = $_POST['pay_method'];

//mengambil data customer dari database
$customer = mysqli_query($conn, "SELECT * FROM customer WHERE id = $customer_id");
$customer_data = mysqli_fetch_assoc($customer);

//mengambil data product dari database
$product = mysqli_query($conn, "SELECT * FROM product WHERE id = $product_id");
$product_data = mysqli_fetch_assoc($product);

//menghitung total harga
$total_price = $quantity * $product_data['price'];

//menambahkan data order ke database
$query = "INSERT INTO `order` VALUES ('', $customer_id, '', $product_id, $quantity, $total_price, $pay_method)";
$result = mysqli_query($conn, $query);

//menampilkan hasil
if ($result) {
    echo "Data order berhasil ditambahkan.";
} else {
    echo "Data order gagal ditambahkan.";
}

//menutup koneksi database
mysqli_close($conn);
