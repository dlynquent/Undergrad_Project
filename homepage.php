<!DOCTYPE html>
<html>

<head>
    <title>QWIXS Home</title>
    <?php include 'include/head.php'; ?>
</head>

<body>
    <!--*************NAVIGATION BAR**************-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Qwixs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--*************NAVIGATION BAR ENDS**************-->


    <!--******************CAROUSEL *******************-->
    <div class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/carousel/CB663484184_.jpg" class="w-100" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/carousel/CB664905557_.jpg" class="w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/carousel/CB667984820_.jpg" class="w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--******************CAROUSEL ENDS*******************-->
    <!-- <div class="container-fluid">
        <div class="row justify-content-center my-5 text-center">
            <div class="col-md-6 col-xl-6 py-1">
                <div class="card text-white bg-dark mb-3 d-none d-xl-block" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 py-1">
                <div class="card text-white bg-dark mb-3 d-none d-xl-block" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>-->
    <div class="container">
        <div class="product-list">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                        <div class="wishlist-icon">
                            <a href="javascript:void(0);"><img
                                    src="https://pngimage.net/wp-content/uploads/2018/06/wishlist-icon-png-3.png" /></a>
                        </div>
                        <div class="product-img">
                            <img
                                src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg">
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">Asus X552CL-SX019D Laptop</div>
                            <div class="price">
                                <span class="rupee-icon">₹</span> 32,000
                            </div>
                            <a href="#" class="blue-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                        <div class="wishlist-icon">
                            <a href="javascript:void(0);"><img
                                    src="https://static.thenounproject.com/png/635650-200.png" /></a>
                        </div>
                        <div class="product-img">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/81nreGN5qQL._SL1500_.jpg">
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">ASUS X507 Core i5 - 8th Gen 15.6"</div>
                            <div class="price">
                                <span class="rupee-icon">₹</span> 30,000
                            </div>
                            <a href="#" class="blue-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                        <div class="wishlist-icon">
                            <a href="javascript:void(0);"><img
                                    src="https://static.thenounproject.com/png/635650-200.png" /></a>
                        </div>
                        <div class="product-img">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/81RrcHvDGbL._SY355_.jpg">
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">ASUS VivoBook S400CA</div>
                            <div class="price">
                                <span class="rupee-icon">₹</span> 45,000
                                <span class="line-through"><span class="rupee-icon">₹</span> 50,000</span>
                            </div>
                            <a href="#" class="blue-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                        <div class="wishlist-icon">
                            <a href="javascript:void(0);"><img
                                    src="https://static.thenounproject.com/png/635650-200.png" /></a>
                        </div>
                        <div class="product-img">
                            <img src="https://cdn.mos.cms.futurecdn.net/kwP2nL8FAVboognXmW6nvP-320-80.jpg">
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">Asus laptops</div>
                            <div class="price">
                                <span class="rupee-icon">₹</span> 50,000
                                <span class="line-through"><span class="rupee-icon">₹</span> 60,000</span>
                            </div>
                            <a href="#" class="blue-btn">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--******************Testing*******************--
    <div class="card text-white bg-dark mb-3 d-none d-xl-block" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                the card's content.</p>
        </div>
    </div>

    --******************Testing*******************-->

    <?php include 'include/footer.php'; ?>
    <?php include 'include/scripts.php'; ?>
</body>

</html>