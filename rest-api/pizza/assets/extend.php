<!----------------------- WORK WITH PHP --------------------->
<?php foreach ($menu as $m) : ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="img/<?= $m['gambar'] ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $m['nama'] ?></h5>
                <p class="card-text"><?= $m['deskripsi'] ?>.</p>
                <h5 class="card-title">Rp. <?= number_format($m['harga'], 0, '.', ',') ?></h5>
                <a href="#" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>