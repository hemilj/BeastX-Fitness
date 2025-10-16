<title>BeastX Fitness</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

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
                    <h2>Trainer</h2>
                    <div class="breadcrumb-option">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

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
            include("../admin/pages/connectdb.php");
            $q = "select * from trainer_master";
            $result = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-4 col-md-6" style="margin-top: 115px;">
                    <div class="single-trainer-item">
                        <img src="../admin/pages/images/trainer/<?php echo $row['photo'] ?>" alt="">
                        <div class="trainer-text">
                            <h5><?php echo $row['tname']?></h5>
                            <span><?php echo $row['trole']?></span>
                            <p><?php echo $row['tdesc']?></p>
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