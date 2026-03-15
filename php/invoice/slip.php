<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="dist/brand/logo.png">
    <title>Slip Invoice</title>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex">
            <img src="dist/brand/esb.png" width="100">
            <p class="h1 ms-2"><strong>INVOICE</strong></p>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="row mt-5">
                    <div class="col-3 border-end">
                        <small>Invoice Id</small><br>
                        <small>Issue Date</small><br>
                        <small>Due Date</small><br>
                        <small>Subject</small><br>
                    </div>
                    <div class="col-8 ms-1">
                        <small id="inv">325468</small><br>
                        <small id="isu">2023-01-01</small><br>
                        <small id="due">2023-01-01</small><br>
                        <small id="sbj">Pembelanjaan</small><br>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-2 text-end">
                        From
                    </div>
                    <div class="col-10">
                        <div class="border-start">
                            <strong class="ms-3 from">ESB</strong>
                            <p class="ms-3">Ruko Paramount Center 2 Blok B 7-8 Tangerang Banten</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-end">
                        For
                    </div>
                    <div class="col-10">
                        <div class="border-start">
                            <strong class="ms-3 for">Seangka Media</strong>
                            <p class="ms-3 for_add">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Item Type</th>
                    <th>Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-end">Price</th>
                    <th class="text-end">Amount</th>
                </tr>
            </thead>
            <tbody id="invItem">

            </tbody>
        </table>

        <div class="row mt-4">
            <div class="col-8"></div>
            <div class="col-2">
                <p class="text-end">Sub Total</p>
            </div>
            <div class="col-2">
                <p class="text-end text-bold subTotal"><strong>0</strong></p>
            </div>
            <div class="col-8"></div>
            <div class="col-2">
                <p class="text-end">Tax (10%)</p>
            </div>
            <div class="col-2">
                <p class="text-end text-bold tax"><strong>0</strong></p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6"></div>
            <div class="col-4">
                <h5 class="text-end">Total Amount</h5>
            </div>
            <div class="col-2">
                <h5 class="text-end text-bold subTotal"><strong>0</strong></h5>
            </div>
        </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // API - Get data invoice
        $(function() {
            $.ajax({
                url: 'function.php',
                method: 'get',
                dataType: 'json',
                data: {
                    'getItems': <?= $_GET['inv'] ?>
                },
                success: function(data) {
                    if (data.length > 0) {
                        let total = 0;
                        $.each(data, function(index, item) {
                            console.log(data[0]);
                            let price = +item.price;
                            let amount = +item.amount;
                            total = total + amount;
                            $('#invItem').append(`
                                <tr>
                                    <td>` + item.type + `</td>
                                    <td>` + item.description + `</td>
                                    <td class="text-center">` + item.quantity + `</td>
                                    <td class="text-end">` + price.toLocaleString() + `</td>
                                    <td class="text-end">` + amount.toLocaleString() + `</td>
                                </tr>
                            `);
                        });
                        let tax = total / 10;
                        let fix = total - tax;
                        $('.subTotal').html('<strong>' + total.toLocaleString() + '</strong>');
                        $('.tax').html('<strong>' + tax.toLocaleString() + '</strong>');
                        $('#inv').html(data[0].inv);
                        $('#isu').html(data[0].issue_date);
                        $('#due').html(data[0].due_date);
                        $('#sbj').html(data[0].subject);
                        $('.from').html(data[0].from);
                        $('.for').html(data[0].name);
                        $('.for_add').html(data[0].address);
                    }
                }
            });
        });
    </script>
</body>

</html>