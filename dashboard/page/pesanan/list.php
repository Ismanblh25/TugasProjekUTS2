<?php
$pesanan = $pdo->query("SELECT pesanan.*, produk.nama as produk FROM pesanan JOIN produk ON pesanan.produk_id = produk.id")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product Type
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Qty</th>
                    <th>Deskripsi</th>
                    <th>Produk</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($pesanan as $p) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $p["nama_pemesan"]; ?></td>
                        <td><?= $p["alamat_pemesan"]; ?></td>
                        <td><?= $p["no_hp"]; ?></td>
                        <td><?= $p["email"]; ?></td>
                        <td><?= $p["jumlah_pesanan"]; ?></td>
                        <td><?= $p["deskripsi"]; ?></td>
                        <td><?= $p["produk"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>