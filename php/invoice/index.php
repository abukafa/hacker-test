<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="dist/brand/logo.png">
    <title>TEST | Invoice</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="dist/brand/esb.png" width="100">
                Invoice
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col text-center">
                <h3>Invoices List</h3>
                <a href="items.php" class="btn btn-dark mt-2" type="button" id="tombol">Add New</a>
            </div>
        </div>

        <hr>

        <div class="row" id="daftar">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="d-none d-md-table-cell">ID</th>
                            <th class="d-none d-md-table-cell">Issue Date</th>
                            <th class="d-none d-md-table-cell">Due Date</th>
                            <th>Subject</th>
                            <th class="text-center">Amount</th>
                            <th class="d-none d-md-table-cell text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody id="invList">

                    </tbody>
                </table>
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
                data: 'getInvoice',
                success: function(data) {
                    if (data.length > 0) {
                        $.each(data, function(index, item) {
                            let total = +item.total;
                            $('#invList').append(`
                                <tr>
                                    <td class="d-none d-md-table-cell">` + item.id + `</td>
                                    <td class="d-none d-md-table-cell">` + item.issue_date + `</td>
                                    <td class="d-none d-md-table-cell">` + item.due_date + `</td>
                                    <td>` + item.subject + `</td>
                                    <td class="text-end">` + total.toLocaleString() + `</td>
                                    <td class="d-none d-md-table-cell text-center">
                                        <a href="slip.php?inv=` + item.id + `" target="_blank" class="btn btn-sm btn-secondary float-end">Print</a>
                                        <a href="items.php?inv=` + item.id + `" class="btn btn-sm btn-primary float-end me-1">Edit Items</a>
                                    </td>
                                </tr>
                            `);
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>