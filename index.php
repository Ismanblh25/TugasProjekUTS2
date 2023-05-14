<?php include_once 'templates/header.php' ?>
<?php include_once 'templates/navbar.php' ?>
<?php include_once 'config/database.php' ?>
<?php
if (isset($_GET['page'])) {

    if (!empty($_GET['page'])) {
        include_once $_GET['page'] . '.php';
    }
} else {
    include_once 'home.php';
}
?>
<?php include_once 'templates/footer.php' ?>