<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BeastX Fitness</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<style>
    .prdts {
        height: 670px;
        margin: 25px 0;
    }

    .pricing-section {
        text-align: center;
        padding: 50px 20px;
    }

    .pricing-section h2 {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .pricing-section p {
        color: #666;
        font-size: 16px;
        margin-bottom: 40px;
    }

    .card {
        border: none !important;
        border-radius: 15px !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
        transition: transform 0.3s !important;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        max-width: 200px;
        margin: 20px auto;
        display: block;
    }

    .price {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .price span {
        font-size: 14px;
        color: #777;
    }

    .card-title {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card-text {
        color: #555;
        font-size: 15px;
        margin-bottom: 20px;
    }

    .card a {
        font-weight: 600;
        text-decoration: none;
    }

    .cartbtn {
        border: none;
        margin-left: 52px;
    }
</style>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<?php
include("header.php");
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Product</h2>
                    <div class="breadcrumb-option">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<section class="pricing-section">
    <h2>What works for you</h2>
    <p>Buy single license for a project or developer license<br>
        for the multiple projects, choice is yours.</p>

    <div class="container">
        <div class="row justify-content-center">

            <!-- Fetch Products -->
            <?php
            include("../admin/pages/connectdb.php");
            $q = mysqli_query($conn, "select * from product_master");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-md-4">
                    <div class="card p-4 prdts h-90">
                        <img src="../admin/pages/images/product/<?php echo $row['photo'] ?>">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="price"><span>₹</span><?php echo $row['rate'] ?></div>
                            <h5 class="card-title"><?php echo $row['pname'] ?></h5>
                            <p class="card-text flex-grow-1"><?php echo $row['pdesc'] ?></p>
                            <button class="blue-link primary-btn cartbtn mt-auto">Add Cart</button>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php
include("footer.php");
?>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>