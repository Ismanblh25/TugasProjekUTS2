<?php
include_once '../config/database.php';

$delete = $pdo->query("DELETE FROM kategori_produk WHERE id='$_GET[id]'");

header('Location: index.php?page=kategori_produk/list');
