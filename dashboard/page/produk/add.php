<?php $kategori_produk = $pdo->query('SELECT * FROM kategori_produk')->fetchAll(PDO::FETCH_ASSOC); ?>

<?php
if (isset($_POST['add'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori_produk = $_POST['kategori_produk'];

    $produk = $pdo->prepare('INSERT INTO produk (kode, nama, harga_jual, harga_beli, stok, min_stok, deskripsi, kategori_produk_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $produk->execute([$kode, $nama, $harga_jual, $harga_beli, $stok, $min_stok, $deskripsi, $kategori_produk]);

    header('Location: index.php?page=produk/list');
}


?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Tambah Produk</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="min_stok" class="form-label">Min Stok</label>
                        <input type="number" class="form-control" id="min_stok" name="min_stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="kategori_produk" class="form-label">Kategori Produk</label>
                        <select class="form-select" aria-label="Default select example" name="kategori_produk" id="kategori_produk" required>
                            <option selected disabled>Pilih Kategori Produk</option>
                            <?php foreach ($kategori_produk as $kp) : ?>
                                <option value="<?= $kp['id']; ?>"><?= $kp['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?page=produk/list" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="add">Tambah Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>