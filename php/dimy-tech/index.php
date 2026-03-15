<!DOCTYPE html>
<html>

<head>
    <title>Form Transaksi</title>
</head>

<body>
    <h1>Form Transaksi</h1>
    <form action="transaksi.php" method="post">
        <label for="customer_id">ID Customer:</label>
        <input type="text" name="customer_id" id="customer_id">
        <br>
        <label for="product_id">ID Product:</label>
        <input type="text" name="product_id" id="product_id">
        <br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity">
        <br>
        <label for="pay_method">Pay Method:</label>
        <select type="text" name="pay_method" id="pay_method">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <br>
        <button type="submit">Buat Transaksi</button>
    </form>
</body>

</html>