<?php
include_once '../config/database.php';

$delete = $pdo->query("DELETE FROM produk WHERE id='$_GET[id]'");

header('Location: index.php?page=produk/list');
