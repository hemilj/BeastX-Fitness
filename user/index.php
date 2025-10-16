<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeastX Fitness</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .nm {
            padding: 30px 30px 15px !important;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php
    include("header.php")
    ?>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>FITNESS ELEMENTS</span>
                        <h1>BeastX Fitness</h1>
                        <!-- <p>Gutim comes packed with the user-friendly BMI Calculator<br /> shortcode which lets</p> -->
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-pic.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                            sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                            cursus a amet.</p>
                        <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida
                            quam semper libero sit amet. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                            rhoncus, gravida quam semper libero sit amet.</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="img/services/service-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="img/services/service-icon-1.png" alt="">
                                    <h4>Strategies</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="img/services/service-icon-3.png" alt="">
                                    <h4>Workout</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="img/services/service-icon-2.png" alt="">
                                    <h4>Yoga</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="img/services/service-icon-4.png" alt="">
                                    <h4>Weight Loss</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Product Section Begin -->
    <section class="product-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>OUR PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                include("../admin/pages/connectdb.php");
                $catname = "";
                $q = mysqli_query($conn, "select * from product_master limit 3");
                while ($row = mysqli_fetch_array($q)) {
                    if ($row['cid'] == 1) {
                        $catname = "Protein-Powders";
                    } elseif ($row['cid'] == 2) {
                        $catname = "Gym-Equipment";
                    } else {
                        $catname = "Gym-Apparel";
                    }
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-trainer-item">
                            <img src="../admin/pages/images/product/<?php echo $catname; ?>/<?php echo $row['photo'] ?>">

                            <div class="trainer-text nm">
                                <h5><?php echo $row['pname'] ?></h5>
                                <p class="card-text"><?php echo $row['pdesc'] ?></p>
                                <button class="primary-btn" style="border: none;"><a href="product.php"
                                        style="text-decoration: none; color: white;">See Details</a></button>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Trainer Section Begin -->
    <section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT TRAINERS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $q = "select * from trainer_master limit 3";
                $result = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-trainer-item">
                            <img src="../admin/pages/images/trainer/<?php echo $row['photo'] ?>" alt="">
                            <div class="trainer-text">
                                <h5><?php echo $row['tname'] ?></h5>
                                <span><?php echo $row['trole'] ?></span>
                                <p><?php echo $row['tdesc'] ?></p>
                                <div class="trainer-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>success stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Patrick Cortez</h4>
                                <span>Leader</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Patrick Cortez</h4>
                                <span>Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Get training today</h2>
                        <p>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry’s standard.</p>
                        <a href="#" class="primary-btn banner-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Membership Section Begin -->
    <section class="membership-section spad" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>MEMBERSHIP PLANS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Basic</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">
                            ₹500
                            <span>/01 month</span>
                        </h2>
                        <ul>
                            <li>
                                <p>Duration</p>
                                <span>12 months</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>00 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        if (!isset($_SESSION['uid'])) {
                            echo '<a href="login.php" class="primary-btn membership-btn">Purchase</a>';
                        } else {
                            echo '<a href="membership.php?plan=Basic&price=500" class="primary-btn membership-btn">Purchase</a>';
                        }
                        ?>
                        <!-- <a href="membership.php?plan=Basic&price=500" class="primary-btn membership-btn">Purchase</a> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Standard</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">₹1000<span>/01 mo</span></h2>
                        <ul>
                            <li>
                                <p>Duration</p>
                                <span>12 months</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        if (!isset($_SESSION['uid'])) {
                            echo '<a href="login.php" class="primary-btn membership-btn">Purchase</a>';
                        } else {
                            echo '<a href="membership.php?plan=Standard&price=1000" class="primary-btn membership-btn">Purchase</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>Premium</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price">₹2000<span>/01 mo</span></h2>
                        <ul>
                            <li>
                                <p>Duration</p>
                                <span>12 months</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>01 person</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>Unlimited</span>
                            </li>
                        </ul>
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }
                        if (!isset($_SESSION['uid'])) {
                            echo '<a href="login.php" class="primary-btn membership-btn">Purchase</a>';
                        } else {
                            echo '<a href="membership.php?plan=Premium&price=2000" class="primary-btn membership-btn">Purchase</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php")
    ?>
</body>

</html>