<div class="container-fluid fixed-top mb-5">
    <div class="container topbar bg-primary d-none d-lg-block p-2">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2 d-flex">
                <i class="fas fa-car-side fa-2x text-white"></i>
                <small class="ms-3 text-white">Free shipping on order over $300</small>
            </div>
            <div class="top-info px-2 d-flex">
                <i class="fas fa-exchange-alt fa-2x text-white"></i>
                <small class="ms-3 text-white">3 days money guarantee</small>
            </div>
            <div class="top-info pe-2 d-flex">
                <i class="fa fa-phone-alt fa-2x text-white"></i>
                <small class="ms-3 text-white">24/7 Support</small>
            </div>

        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="../index.php" class="navbar-brand">
                <h1 class="text-primary display-6">QTRAT</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <form action="/home" method="GET">
                        <button class="nav-item nav-link active" type="submit">Home</button>
                    </form>
                    <form action="/shop" method="GET" >
                        <button class="nav-item nav-link active" type="submit">Shop</button>
                    </form>
                    <form action="/contact" method="GET">
                        <button class="nav-item nav-link active" type="submit">Contact</button>
                    </form>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    <form action="/wishlist" method="GET" class="me-4 my-auto">
                        <button type="submit" class="position-relative ">
                            <i class="fa-solid fa-heart fa-2xl" style="color: #81c408;"></i>
                        </button>
                    </form>
                    <a href="../cart.php" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                    <div class="dropdown my-auto">
                        <a href="#" class="my-auto" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <form action="profile.php" method="GET">
                                    <button type="submit" class="dropdown-item">View Profile</button>
                                </form>
                            </li>
                            <li>
                                <form action="/purchase-history" method="GET">
                                    <button type="submit" class="dropdown-item">Purchase History</button>
                                </form>
                            </li>
                            <li>
                                <form action="/user-logout" method="POST">
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
</div>
</nav>
</div>
</div>