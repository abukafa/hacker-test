function allMenu() {
    $('#daftar-menu').html('');
    $.getJSON('assets/pizza.json', function (data) {
        let menu = data.menu;
        $.each(menu, function (i, data) {
            $('#daftar-menu').append('<div class="col-md-4 mb-4"><div class="card"><img src="img/' + data.gambar + '" class="card-img-top"><div class="card-body"><h5 class="card-title">' + data.nama + '</h5><p class="card-text">' + data.deskripsi + '.</p><h5 class="card-title">Rp. ' + data.harga + '</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
        });
    });
}

allMenu();

$('.nav-link').on('click', function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);
    
    if (kategori == 'All Menu') {
        allMenu();
        return;
    }
    
    $.getJSON('assets/pizza.json', function (data) {
        let menu = data.menu;
        let content = '';
        $.each(menu, function (i, data) {
            if (data.kategori == kategori.toLowerCase()) {
                $('#daftar-menu').html('');
                content += '<div class="col-md-4 mb-4"><div class="card"><img src="img/' + data.gambar + '" class="card-img-top"><div class="card-body"><h5 class="card-title">' + data.nama + '</h5><p class="card-text">' + data.deskripsi + '.</p><h5 class="card-title">Rp. ' + data.harga + '</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
            }
        });
        $('#daftar-menu').append(content);
    });
});

