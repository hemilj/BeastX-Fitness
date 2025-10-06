<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="./css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="container" style="padding: 20px 50px;">
        <!-- Title section -->
        <div class="title">Login</div>
        <div class="content">
            <!-- Registration form -->
            <form action="#">
                <div class="user-details">
                    <!-- Input for Email -->
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
                    <!-- Input for Password -->
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="regLink">
                    <p class="details">
                        <input type="checkbox" id="remember-me">
                        <span class="details">Remember me</span>
                    </p>
                    <a href="register.php" style="color: #007bff;">If you don't have an account</a>
                </div>
                <!-- Submit button -->
                <div class="button">
                    <input type="submit" value="Login" name="loginBtn">
                </div>

            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>