<?php
// Handle form submission
session_start();
include("../admin/pages/connectdb.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plan = $_POST['plan'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $q = mysqli_query($conn, "insert into membership values('','$name','$email','$phone','$plan');");
    if($q){
        $success = "Thank you <b>$name</b>! You selected <b>$plan</b> plan with price <b>₹$price</b>. We will contact you at $email or $phone.";
    } else {
        echo "<script>alert(Not purchased)</script>";
    }


}

// Default plan from query string
$plan = isset($_GET['plan']) ? $_GET['plan'] : 'Basic';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .link-home {
            text-decoration: none;
            text-align: center;
            margin-top: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .link-home:hover {
            color: #b91c1c;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Membership Registration</h2>

        <?php if (!empty($success)): ?>
            <div class="alert alert-success">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="card shadow p-4">
            <!-- Plan Selection -->
            <div class="mb-3">
                <label for="plan" class="form-label">Select Plan</label>
                <select name="plan" id="plan" class="form-select" required>
                    <option value="Basic" <?= ($plan == "Basic" ? "selected" : "") ?>>Basic</option>
                    <option value="Standard" <?= ($plan == "Standard" ? "selected" : "") ?>>Standard</option>
                    <option value="Premium" <?= ($plan == "Premium" ? "selected" : "") ?>>Premium</option>
                </select>
            </div>

            <!-- Price (readonly) -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="" readonly>
            </div>

            <!-- User Details -->
            <div class="mb-3">
                <label class="form-label">username</label>
                <input type="text" value="<?php echo $_SESSION['username']; ?>" name="name" class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" value="<?php echo $_SESSION['pnumber']; ?>" name="phone" class="form-control"
                    required>
            </div>

            <button type="submit" class="btn btn-success w-100">Submit</button>
            <a href="index.php" class="link-home btn-success">← Back to Home</a>
        </form>
    </div>

    <script>
        const planSelect = document.getElementById("plan");
        const priceInput = document.getElementById("price");

        function updatePrice() {
            const prices = {
                "Basic": 500,
                "Standard": 1000,
                "Premium": 2000
            };
            priceInput.value = prices[planSelect.value];
        }

        // Initial load
        updatePrice();

        // On change
        planSelect.addEventListener("change", updatePrice);
    </script>

</body>

</html>