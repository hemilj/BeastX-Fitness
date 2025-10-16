<?php session_start(); ?>
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

    .dropdown-menu {
        display: block !important;
        position: absolute !important;
        background: #fff;
        z-index: 9999;
        padding: .5rem !important;
    }

    .signout-btn {
        display: inline-block;
        background: #ff4d4d;
        color: #fff !important;
        padding: 8px 18px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        width: 110px !important;
    }

    .signout-btn:hover {
        background: #e04343;
        color: #fff !important;
        text-decoration: none;
    }

    .uname-text {
        cursor: pointer;
    }

    .uname-text > span {
        margin-left: 12px;
    }

    .i:hover {
        color: #ff4d4d !important;
        transform: scale(1.1);
        transition: all 0.3s ease;

    }

    .dropdown:hover .dropdown-menu {
        display: block !important;  
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
                    <?php if (isset($_SESSION['username'])): ?>
                        <div class="dropdown" style="display:inline-block; margin-left:15px;">

                            <span class="primary-btn signup-btn uname-text" onclick="toggleLogout()"><?php echo htmlspecialchars($_SESSION['username']); ?>
                                <span class="uname-icon" id="openIcon">
                                    <i class="bi bi-box-arrow-down"></i>
                                </span>
                                <span class="uname-icon" visible="false" id="closeIcon" style="display:none;">
                                    <i class="bi bi-x"></i>
                                </span>
                            </span>
                            <!-- Dropdown Menu -->
                            <div id="logoutBox" style="display:none;">
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
                                    <a href="logout.php" class="primary-btn signout-btn"><i class="bi bi-box-arrow-right"></i> Log out</a>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Show login button if not logged in -->
                        <a href="login.php" class="primary-btn signup-btn">Log in</a>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

<script>
    function toggleLogout() {
        var box = document.getElementById('logoutBox');
        box.style.display = box.style.display === 'none' ? 'block' : 'none';

        var closeIcon = document.getElementById('closeIcon');
        var openIcon = document.getElementById('openIcon');
        if (box.style.display === 'block') {
            closeIcon.style.display = 'inline';
            openIcon.style.display = 'none';
        } else {
            closeIcon.style.display = 'none';
            openIcon.style.display = 'inline';
        }

    }
</script>