<?php $product = $pdo->query('SELECT * FROM produk')->fetchAll(PDO::FETCH_ASSOC); ?>
<?php

if (isset($_POST['checkout'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $alamat_pemesan = $_POST['alamat_pemesan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $deskripsi = $_POST['deskripsi'];
    $produk_id = $_POST['produk_id'];

    $insert = $pdo->prepare('INSERT INTO pesanan (nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) VALUES (:nama_pemesan, :alamat_pemesan, :no_hp, :email, :jumlah_pesanan, :deskripsi, :produk_id)');
    $insert->execute([
        ':nama_pemesan' => $nama_pemesan,
        ':alamat_pemesan' => $alamat_pemesan,
        ':no_hp' => $no_hp,
        ':email' => $email,
        ':jumlah_pesanan' => $jumlah_pesanan,
        ':deskripsi' => $deskripsi,
        ':produk_id' => $produk_id
    ]);

    header('Location: index.php?page=checkout-success');
}

?>
<div class="container my-5">
    <h1 class="text-center font-weight-bolder mb-3">Checkout Product</h1>
    <div class="card border-0 shadow mb-5 mx-auto" style="max-width: 700px; border-radius:1rem;">
        <div class="card-body p-5">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="nama_pemesan">
                </div>
                <!-- alamat_pemesan -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Lengkap" name="alamat_pemesan">
                </div>
                <!-- no_hp_pemesan -->
                <div class="form-group">
                    <label for="exampleInputEmail1">No. HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No. HP" name="no_hp">
                </div>
                <!-- email -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email">
                </div>
                <!-- jumlah_pesanan -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pesanan</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pesanan" name="jumlah_pesanan">
                </div>
                <!-- deskripsi -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                </div>
                <!-- select product -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Produk</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="produk_id">
                        <?php foreach ($product as $key => $value) : ?>
                            <option value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <a href="index.php?page=home" class="btn btn-secondary">Back Home</a>
                    <button type="submit" class="btn btn-primary" name="checkout">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>