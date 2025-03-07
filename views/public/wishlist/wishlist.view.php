<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/views/assets/css/style.css">
    <link rel="stylesheet" href="/views/assets/css/bootstrap.min.css">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/head.php'; ?>
</head>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/header.php'; ?>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->





    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->



    <div class="container py-5">
        <h2 class="text-center mb-4">My Wishlist</h2>

        <div class="row g-4">
            <?php if (!empty($wishlistItems)): ?>
                <?php foreach ($wishlistItems as $item): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?= $item['product_img_url'] ?>" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4><?= $item['product_name'] ?></h4>

                                <p class="text-dark fs-5 fw-bold">$<?= $item['product_price'] ?></p>

                                <div class="d-flex justify-content-between">
                                    <form action="/remove-item/<?= $item['id'] ?>" method="POST" style="display:inline;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                    <!-- <form method="POST" action="/wishlist/remove">
                                    <input type="hidden" name="product_id" value="//">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form> -->

                                    <a href="/cart/add?product_id=<?= $item['id'] ?>" class="btn btn-primary">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Your wishlist is empty.</p>
            <?php endif; ?>
        </div>
    </div>



    <!-- Cart Page Start -->

    <!-- Cart Page End -->


    <!-- Footer Start -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/footer.php'; ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/views/assets/js/main.js"></script>
</body>

</html>