<?php
$product = $pdo->query("SELECT * FROM produk WHERE id='$_GET[id]'")->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['edit'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];

    $product = $pdo->prepare("UPDATE produk SET kode=?, nama=?, harga_jual=?, harga_beli=?, stok=?, min_stok=?, deskripsi=? WHERE id='$_POST[id]'");
    $product->execute([$kode, $nama, $harga_jual, $harga_beli, $stok, $min_stok, $deskripsi]);

    header('Location: index.php?page=produk/list');
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Edit Product</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" value="<?= $product['kode']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">ProduK</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $product['nama']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="<?= $product['harga_beli']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $product['harga_jual']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= $product['stok']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="min_stok" class="form-label">Stok Minimal</label>
                        <input type="number" class="form-control" id="min_stok" name="min_stok" value="<?= $product['min_stok']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $product['deskripsi']; ?></textarea>
                    </div>

                    <div class="modal-footer my-4">
                        <a href="index.php?page=produk/list" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>