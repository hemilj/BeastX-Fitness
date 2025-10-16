<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration Form</title>
  <link rel="stylesheet" href="./css/register.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <div class="container" style="padding: 20px 50px;">
    <!-- Title section -->
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <?php
     include("../admin/pages/connectdb.php");
      if (isset($_POST['regist'])) {
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pnum = $_POST['pnumber'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        if (isset($_POST['gender1'])) {
          $gender = "Male";
        } elseif (isset($_POST['gender2'])) {
          $gender = "Female";
        } elseif (isset($_POST['gender3'])) {
          $gender = "Prefer not to say";
        }
        if ($pass != $cpass) {?>
        <script>alert("password a nd confirm password is incorrect...");</script>
        <?php } else {
          $q = mysqli_query($conn, "insert into register values('','$uname','$email','$pnum','$pass','$gender');");
          if ($q) {?>
                <script>alert("inserted.....");</script>
                <script>window.location.href="login.php";</script>
          <?php
          } else {?>
              <script>alert("not inserted....");</script>
          <?php }
        }


      }
      ?>
      <form action="#" method="POST">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname" placeholder="Enter your username" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="pnumber" placeholder="Enter your number" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass" placeholder="Enter your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <!-- Radio buttons for gender selection -->
          <input type="radio" name="gender1" id="dot-1">
          <input type="radio" name="gender2" id="dot-2">
          <input type="radio" name="gender3" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <!-- Label for Male -->
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <!-- Label for Female -->
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <!-- Label for Prefer not to say -->
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register" name="regist">
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