<?php
$products = $pdo->query('SELECT * FROM produk')->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="svg-container" style="position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: -1;">
    <svg viewbox="0 0 800 400" class="svg">
        <path id="curve" fill="#1c2938" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
        </path>
    </svg>
</div>
<div class="container col-xxl-8 px-4 pb-5 mb-5" style="min-height: 70vh;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 font-weight-bold text-white">Fashion Store</h1>
            <p class="text-white">Find Unique Beauty Online at Fashion Outlet Store. Free Shipping over $109 & Easy Returns. Shop 2023 Newest in Fashion Store. </p>
            <div class="d-grid d-flex gap-2 justify-content-md-start">
                <a href="#product" class="btn btn-light px-4 me-md-2 me-2 btn-md font-weight-bold">View Products</a>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container py-5" id="product">
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bolder">Fashion Store</h1>
            <p class="font-italic text-muted mb-0">An awesome Fashion Store Collection with variant collections</p>
        </header>
        <h2 class="font-weight-bold mb-2">From the Shop</h2>
        <div class="row pb-5 mb-4">
            <?php foreach ($products as $p) : ?>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><img src="https://dummyimage.com/600x400/ffffff/001111.png" alt="" class="img-fluid d-block mx-auto mb-3">
                            <h5> <a href="#" class="text-dark"><?= $p["nama"]; ?></a></h5>
                            <p class="small text-muted font-italic">Rp. <?= $p["harga_jual"]; ?></p>
                            <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                            </ul>
                            <a href="index.php?page=detail&id=<?= $p["id"]; ?>" class="btn btn-link px-0"><i class="fa fa-eye mr-2"></i>View Details</a>
                            <a href="index.php?page=checkout" class="btn btn-link px-0"><i class="fa fa-shopping-cart mr-2"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>