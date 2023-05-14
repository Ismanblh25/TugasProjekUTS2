<?php
if (isset($_POST["add"])) {
    $name = $_POST["nama"];
    $product_type = $pdo->prepare("INSERT INTO kategori_produk (nama) VALUES ('$name')")->execute();
    header("Location: index.php?page=kategori_produk/list");
}
?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Add Kategori Produk</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Kategori Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?page=kategori_produk/list" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="add">Add Kategori Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>