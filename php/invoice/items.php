<?php require_once 'function.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker3.min.css">
    <link rel="shortcut icon" href="dist/brand/logo.png">
    <title>TEST | Invoice</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand option" href="#">
                <img src="dist/brand/esb.png" width="100">
                Invoice
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col">
                <h3 class="d-inline page-label">New Transaction</h3>
                <a class="btn btn-outline-secondary float-end edit-button d-none">Edit Invoice</a>
                <a href="index.php" class="btn float-end">
                    <- Back </a>
            </div>
        </div>

        <hr>
        <form action="function.php?create" method="POST" id="form-create">
            <div class="row">
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='id'>Invoice Number</label>
                        <input type='text' class='form-control' name='id' id='id' value="<?= isset($_GET['inv']) ? $_GET['inv'] : invoice_num() ?>" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='issue'>Issue Date</label>
                        <input type='text' class='form-control' name='issue' id='issue' autocomplete="off">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='due'>Due Date</label>
                        <input type='text' class='form-control' name='due' id='due' autocomplete="off">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='subject'>Subject</label>
                        <input type='text' class='form-control' name='subject' id='subject'>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='from'>From</label>
                        <input type='hidden' class='form-control' name='from_input' id='from_input' readonly>
                        <select type='text' class='form-select' name='from' id='from'>
                            <option value="">.. pilih ..</option>
                            <option>PT. Esensi Solusi Buana</option>
                            <option>EBS - Client Acquisition</option>
                            <option>EBS - Legal Counsel</option>
                            <option>EBS - Finance Business Partner</option>
                            <option>EBS - Software Engineer</option>
                            <option>EBS - Squad Supervisor</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='mb-2'>
                        <label class='form-label' for='for'>To</label>
                        <input type='hidden' class='form-control' name='for_input' id='for_input' readonly>
                        <select type='text' class='form-select' name='for' id='for'>
                            <option value="">.. pilih ..</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-item">
                <div class="row">
                    <div class="col-md-2">
                        <div class='mb-2'>
                            <label class='form-label' for='type'>Item Type</label>
                            <select type='text' class='form-select' name='type' id='type' required>
                                <option value=''>.. pilih ..</option>
                                <option>Expenses</option>
                                <option>Service</option>
                                <option>Installation</option>
                                <option>Partnership</option>
                                <option>Taxes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class='mb-2'>
                            <label class='form-label' for='description'>Description</label>
                            <input type='text' class='form-control' name='description' id='description' required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class='mb-2'>
                            <label class='form-label' for='quantity'>Qty</label>
                            <input type='text' class='form-control' name='quantity' id='quantity' onkeyup="countAmount()" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class='mb-2'>
                            <label class='form-label' for='price'>Price</label>
                            <input type='text' class='form-control' name='price' id='price' onkeyup="countAmount()" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class='mb-2'>
                            <label class='form-label' for='amount'>Amount</label>
                            <input type='text' class='form-control' name='amount' id='amount' readonly>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="text-center">
                <button class="btn btn-primary save-button" type="submit" name="save">Add Item</button>
            </div>
        </form>
        <div class="float-end" id="total">
            <h3>0</h3>
        </div>
        <br>
        <hr class="mt-4">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="d-none d-md-table-cell">Type</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="d-none d-md-table-cell text-center">Qty</th>
                            <th scope="col" class="d-none d-md-table-cell text-center">Price</th>
                            <th scope="col" class="text-center">Amount</th>
                            <th scope="col" class="text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody id="invItems">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="form-update">
                    <div class="modal-body">
                        <div class='mb-2'>
                            <label class='form-label' for='id'>Item Id</label>
                            <input type='text' class='form-control' name='e_id' id='e_id' readonly>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='invoice_id'>Invoice Number</label>
                            <input type='text' class='form-control' name='e_invoice' id='e_invoice' readonly>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='type'>Item Type</label>
                            <select type='text' class='form-select' name='e_type' id='e_type' required>
                                <option value=''>.. pilih ..</option>
                                <option>Expenses</option>
                                <option>Service</option>
                                <option>Installation</option>
                                <option>Partnership</option>
                                <option>Taxes</option>
                            </select>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='description'>Description</label>
                            <input type='text' class='form-control' name='e_description' id='e_description' required>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='quantity'>Qty</label>
                            <input type='text' class='form-control' name='e_quantity' id='e_quantity' onkeyup="countAmount()" required>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='price'>Price</label>
                            <input type='text' class='form-control' name='e_price' id='e_price' onkeyup="countAmount()" required>
                        </div>
                        <div class='mb-2'>
                            <label class='form-label' for='amount'>Amount</label>
                            <input type='text' class='form-control' name='e_amount' id='e_amount' readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="save">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/bootstrap-datepicker.min.js"></script>
    <script src="script.js"></script>
    <script>
        function countAmount() {
            var amount = $('#quantity').val() * $('#price').val();
            $('#amount').val(amount);
            if ($('#e_quantity').focus) {
                var amount = $('#e_quantity').val() * $('#e_price').val();
                $('#e_amount').val(amount);
            }
        }
    </script>
</body>

</html>