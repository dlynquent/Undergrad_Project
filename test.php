<!DOCTYPE html>
<html>

<head>
    <title>QWIXS Home</title>
    <?php include 'include/head.php'; ?>
</head>

<body>
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
    <!-- Image Carousel -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-interval="6000">

        <!-- Carousel Content -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/carousel/CB663484184_.jpg" class="w-100" alt="">
            </div>

            <div class="carousel-item">
                <img src="assets/carousel/CB664905557_.jpg" class="w-100" alt="">
            </div>

            <div class="carousel-item">
                <img src="assets/carousel/CB667984820_.jpg" class="w-100" alt="">
            </div>

        </div>
        <!-- End Carousel Content -->

        <!-- Carousel Indicators -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide=" prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide=" next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>

        <!-- End Carousel Indicators -->

    </div>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/scripts.php'; ?>
</body>

</html>