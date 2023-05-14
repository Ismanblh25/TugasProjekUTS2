<?php
$kategori_produk = $pdo->query("SELECT * FROM kategori_produk WHERE id = $_GET[id]")->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];

    $kategori_produk = $pdo->prepare("UPDATE kategori_produk SET nama = '$name' WHERE id = '$id'")->execute();
    header("Location: index.php?page=kategori_produk/list");
}

?>

<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center">Edit Kategori Produk</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $kategori_produk['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="name" required value="<?= $kategori_produk['nama']; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?page=kategori_produk/list" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="edit">Edit Kategori Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>