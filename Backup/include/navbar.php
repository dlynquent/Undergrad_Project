<?php

session_start();

?>


<!--ACCESS BAR-->
<?php
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>

<div class="topbar-one">
    <div class="container">
        <div class="topbar-one_right"><a href="#none"></a>
            <a href="logout.php">Sign Out</a>
        </div>
    </div>
</div>
<?php } else { ?>

<div class="topbar-one">
    <div class="container">
        <div class="topbar-one_right"><a href="register.php">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </div>
</div>
<?php } ?>
<!--END OF ACCESS BAR-->


<div id="navigation-sticky">

    <!-- Navigation -->
    <nav class="navbar bg-light navbar-light navbar-expand-lg sticky-top">
        <div class="container">

            <a href="index.php" class="navbar-brand"><img src="assets/timg4.png" alt="timg4" title="Logo">TiMG</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <!--<li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>-->
                    <!--<li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Categories</a>
                        <?php
						// Include config file
						require_once "config.php";{
						$dropdownqry = "SELECT `item_title` FROM `items`";
						$getCategorynme = mysqli_query($link, $dropdownqry);
						$rsCategorynme = mysqli_fetch_assoc($getCategorynme); 
						?>
                        <ul class="dropdown-menu">
                            <?php do {
								?>
                            <li><a class="dropdown-item" item_title
                                    href="search.php?keywords=<?php echo $rsCategorynme['item_title']; ?>">
                                    <?php echo $rsCategorynme['item_title']; ?></a></li>
                            <?php
								} while ($rsCategorynme = mysqli_fetch_assoc($getCategorynme)); ?>
                        </ul>
                        <?php } ?>
                    </li>

                    <form class="form-inline" action="search.php" method="POST">
                        <!--<form action="search.php" method="POST">-->
                        <input class="form-control mr-sm-6" type="text" placeholder="Search Courses" name="keywords">
                        <button class="btn btn-light my-sm-0" type="submit" value="search"><i
                                class="fa fa-search"></i></button>
                    </form>
                    <li class="nav-item"><a href="" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Teach on TIMG</a></li>
                </ul>



            </div>



        </div>
    </nav>
    <!-- End Navigation -->