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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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




    <body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/header.php'; ?>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        
        
        <!-- Navbar End -->


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
            <h1 class="text-center text-white display-6">Shopoing</h1>
            <h1 class="text-center text-white display-6">Fun</h1>
            <h1 class="text-center text-white display-6">Page1</h1>
            <!-- <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Shop</li>
            </ol> -->
        </div>
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">Fresh fruits shop</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                    <label for="fruits">Default Sorting:</label>
                                    <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                        <option value="Nothing">Nothing</option>
                                        <option value="Popularity">Popularity</option>
                                        <option value="Organic">Organic</option>
                                        <option value="Fantastic">Fantastic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4 class="mb-2">Price</h4>
                                            <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="10" value="5" oninput="amount.value = this.value + ' JD'">
                                            <output id="amount" name="amount" for="rangeInput">5 JD</output>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Categories</h4>
                                            <div class="mb-2"> 
                                                <input type="checkbox" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                                <label for="Categories-1"> 🍏 Apples</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="checkbox" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                                <label for="Categories-2"> 🍊 Oranges</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="checkbox" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                                <label for="Categories-3"> 🍑 Strawbery</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="checkbox" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                                <label for="Categories-4"> 🍌 Banana</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="checkbox" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                                                <label for="Categories-5"> 🍋 Lemon</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="service-item bg-light text-center p-5">
                                            <i class="fa fa-carrot display-1 text-primary mb-3" ></i>
                                            <h4>Fresh Vegetables</h4>
                                            <p class="mb-0">The best Fresh Vegetables from our shop Thank you for visit us</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="service-item bg-light text-center p-5 ">
                                            <i class="fa fa-apple-alt display-1 text-primary mb-3 "></i>
                                            <h4>Fresh Fruits</h4>
                                            <p class="mb-0">The best Fresh Fruits from our shop Thank you for visit us Fresh Fresh</p>
                                        </div>
                                    <!-- <div class="col-lg-12 mt-5 mb-5">
                                        <div class="position-relative">
                                            <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                                <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-12 mt-5 mb-5" >
                                        <div class="position-relative">
                                            <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 100%; left:-10px ; transform: translateY(-50%);">
                                                <h3 class="text-secondary fw-bold">Fresh <br> Fruits </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">
                                    <?php foreach($products as $product): ?>
                                        
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                    <a  href="/shop/<?= $product['id'] ?>">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?=$product['product_img_url']?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?=$product['product_name']?></div>
                                            <form action="/add-wishlist-item" method="POST" class="position-absolute" style="top: 10px; right: 10px;">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa fa-heart text-white bg-secondary px-3 py-1 rounded"></i>
                                                </button>
                                            </form>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4><?=$product['product_price']?></h4>
                                                <p><?=$product['product_description']?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                   
                                                    <a href="cart.html" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>🛒 Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="pagination d-flex justify-content-center mt-5">
                <a href="#" class="rounded">&laquo;</a>
                <a href="#" class="active rounded">1</a>
                <a href="shop2.html" class="rounded">2</a>
                <a href="shop2.html" class="rounded">&raquo;</a>
            </div>
        </div>
        <!-- Fruits Shop End-->


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