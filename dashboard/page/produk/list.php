<?php $product = $pdo->query('SELECT * FROM produk')->fetchAll(PDO::FETCH_ASSOC); ?>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product
        </div>
        <a href="index.php?page=produk/add" class="btn btn-primary btn-md">Tambah Produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $p) : ?>
                    <tr>
                        <td><?= $p["kode"]; ?></td>
                        <td><?= $p["nama"]; ?></td>
                        <td>Rp. <?= number_format($p["harga_jual"], 0, ',', '.'); ?></td>
                        <td>Rp. <?= number_format($p["harga_beli"], 0, ',', '.'); ?></td>
                        <td><?= $p["stok"]; ?></td>
                        <td><?= $p["min_stok"]; ?></td>
                        <td><?= strlen($p["deskripsi"]) > 30 ? substr($p["deskripsi"], 0, 30) . '...' : $p["deskripsi"]; ?></td>
                        <td>
                            <a href="index.php?page=produk/edit&id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=produk/delete&id=<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>