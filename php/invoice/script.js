// API - Get invoice by invoice number
function firstLoad() {
    let id = $('#id').val();
    $.ajax({
        url: 'function.php',
        method: 'get',
        dataType: 'json',
        data: {
            'getInvoice': $('#id').val()
        },
        success: function (data) {
            if (data.length > 0) {
                $('.page-label').html('Edit Transaction');
                $('.edit-button').removeClass('d-none');
                $('#issue').val(data[0].issue_date);
                $('#issue').attr('readonly', 'true');
                $('#due').val(data[0].due_date);
                $('#due').attr('readonly', 'true');
                $('#subject').val(data[0].subject);
                $('#subject').attr('readonly', 'true');
                $('#from').attr('class', 'form-select d-none');
                $('#from_input').attr('type', 'text');
                $('#from_input').val(data[0].from);
                $('#for').attr('class', 'form-select d-none');
                $('#for_input').attr('type', 'text');
                $('#for_input').val(data[0].name);
            } else {
                // Enable Datepicker
                $(function () {
                    $('#issue').datepicker({ 
                    autoclose: true,
                    todayHighlight: true,
                    format : 'yyyy-mm-dd' 
                    });
                });
                $(function() {
                    $('#due').datepicker({ 
                    autoclose: true,
                    todayHighlight: true,
                    format : 'yyyy-mm-dd' 
                    });
                });
            }
        }
    });
};

// API - Get all data vendor
$(function() {
    $.ajax({
        url: 'function.php',
        method: 'get',
        dataType: 'json',
        data: 'getVendor',
        success: function(data){
            $.each(data, function(index, item){
                $('#for').append('<option value="' + item.id + '">' + item.name + '</option>');
            });
        }
    });
});

firstLoad();

// API - Get invoice items by Id
$(function() {
    $.ajax({
        url: 'function.php',
        method: 'get',
        dataType: 'json',
        data: {
            'getItems': $('#id').val()
        },
        success: function(data){
            if (data.length > 0) {
                let total = 0;
                $.each(data, function (index, item) {
                    let price = +item.price;
                    let amount = +item.amount;
                    total = total + amount;
                    $('#invItems').append(`
                        <tr>
                            <td class="d-none d-md-table-cell">` + item.type + `</td>
                            <td>` + item.description + `</td>
                            <td class="d-none d-md-table-cell text-center">` + item.quantity + `</td>
                            <td class="d-none d-md-table-cell text-end">` + price.toLocaleString() + `</td>
                            <td class="text-end">` + amount.toLocaleString() + `</td>
                            <td class="text-center" id="optionTableCell">
                                <a onclick="if(confirm('Yakin akan menghapus data ini?')){ location.href='function.php?delItem=` + item.id + `&inv=` + item.invoice_id + `'}" class="btn btn-sm btn-danger float-end">Delete</a>
                                <a data-id=` + item.id + ` class="btn btn-sm btn-primary float-end me-1" id="edit" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">Edit</a>
                            </td>
                        </tr>
                    `);
                });
                $('#total').html('<h3>' + total.toLocaleString() + '</h3>');
            }
        }
    });
});

// API - Get Item by Id - for Edit Item Modal
$('#invItems').on('click', '#edit', function () {
    let id = $(this).data('id');
    $.ajax({
        url: 'function.php',
        method: 'get',
        dataType: 'json',
        data: {
            'getItems': 'ok',
            'id': id
        },
        success: function (data) {
            if (data.length > 0) {
                $('#form-update').attr('action', 'function.php?update=' + data[0].id)
                $('#e_id').val(data[0].id);
                $('#e_invoice').val(data[0].invoice_id);
                $('#e_type').val(data[0].type);
                $('#e_description').val(data[0].description);
                $('#e_quantity').val(data[0].quantity);
                $('#e_price').val(data[0].price);
                $('#e_amount').val(data[0].amount);
            }
        }
    });
});

// Edit Button - for Edit Invoice
$('.edit-button').on('click', function () {
    let inv = $('#id').val();
    let label = $(this).html();
    if (label == 'Edit Invoice') {
        $(this).html('Cancel');
        $('#issue').removeAttr('readonly', 'true');
        $('#due').removeAttr('readonly', 'true');
        $('#subject').removeAttr('readonly', 'true');
        $('#from').attr('class', 'form-select');
        $('#from_input').attr('type', 'hidden');
        $('#for').attr('class', 'form-select');
        $('#for_input').attr('type', 'hidden');
        $('#type').removeAttr('required');
        $('#description').removeAttr('required');
        $('#quantity').removeAttr('required');
        $('#price').removeAttr('required');
        $('.save-button').html('Update');
        $('.save-button').attr('name', 'update');
        $('.form-item').addClass('d-none');
    } else {
        $(this).html('Edit Invoice');
        $('#type').attr('required', 'true');
        $('#description').attr('required', 'true');
        $('#quantity').attr('required', 'true');
        $('#price').attr('required', 'true');
        $('.save-button').html('Add Item');
        $('.save-button').attr('name', 'save');
        $('.form-item').removeClass('d-none');
        firstLoad();
    }
});