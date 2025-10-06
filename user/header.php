<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Css Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<style>
    .logo a {
        display: inline-block !important;
        padding: 15px 0 15px !important;
    }

    .custom-btn {
        background: transparent;
        color: #fff !important;
        border: 2px solid transparent;
        border-radius: 5px;
        padding: 8px 18px;
        font-weight: bold;
        position: relative;
        z-index: 1;
    }

    .custom-btn::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 5px;
        padding: 2px;
        background: linear-gradient(90deg, #ff416c, #ff4b2b, #ff9d2f);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        z-index: -1;
    }

    .custom-btn:hover {
        background: linear-gradient(90deg, #ff416c, #ff4b2b, #ff9d2f);
        color: #fff !important;
    }

    .brand-text {
        font-size: 2rem;
        /* Example: make text bigger */
        font-weight: bold;
        /* Example: bold text */
        color: #ffffffff;
        /* Example: red brand color */
        letter-spacing: 2px;
        /* Example: spacing between letters */
        text-transform: uppercase;
        /* Example: all caps */
    }

    .brand-highlight {
        color: #ff4d4d;
    }
</style>

<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <span class="brand-text">BEAST<span class="brand-highlight">X</span></span>
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="trainer.php">Trainer</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="contect.php">Contacts</a></li>
                    <button type="button" class="btn custom-btn">
                        <i class="bi bi-cart"></i> Cart
                    </button>
                </ul>
            </nav>
            <a href="login.php" class="primary-btn signup-btn">Log in</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>