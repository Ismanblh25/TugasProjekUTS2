<?php $data = $pdo->query('SELECT produk.*, kategori_produk.nama as kategori FROM produk JOIN kategori_produk ON produk.kategori_produk_id = kategori_produk.id WHERE produk.id = ' . $_GET['id'])->fetch(PDO::FETCH_ASSOC); ?>
<div class="container my-5">
    <h1 class="text-center font-weight-bolder mb-3">Detail Product</h1>
    <div class="card border-0 shadow mb-5">
        <div class="card-body p-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://dummyimage.com/600x400/ffffff/001111.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <h1 class="font-weight-bolder"><?= $data['nama'] ?></h1>
                    <h4 class="font-weight-bold my-2">Rp. <?= number_format($data['harga_jual'], 0, ',', '.') ?></h4>
                    <p class="mb-0">Stock : <?= $data['stok'] ?></p>
                    <p class="mb-0">Category : <?= $data['kategori'] ?></p>
                    <p class="mb-3"><?= $data['deskripsi'] ?></p>
                    <a href="index.php?page=home" class="btn btn-secondary">Back Home</a>
                </div>
            </div>
        </div>
    </div>
</div>