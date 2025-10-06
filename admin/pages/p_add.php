<?php
include('header.php');
include('connectdb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header {
            padding: 15px;
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .form-control,
        .form-select {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 6px rgba(13, 110, 253, 0.3);
        }

        .btn-custom {
            background-color: #0d6efd;
            border: none;
            padding: 10px;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #084298;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        Add New Product
                    </div>
                    <?php
                    if (isset($_POST['btnsubmit'])) {
                        $name = $_POST['txtname'];
                        $cid = $_POST['selCat'];
                        $price = $_POST['txtprice'];
                        $qty = $_POST['txtqty'];
                        $desc = $_POST['txtdesc'];
                        $photo = $_FILES['txtimg']['name'];

                        // 1. Get category name from DB
                        $catRes = mysqli_query($conn, "select * from catagory_master where cid = $cid");
                        $catRow = mysqli_fetch_assoc($catRes);
                        $categoryName = $catRow['cname'];

                        // 2. Sanitize category name for folder
                        $folderName = preg_replace('/[^A-Za-z0-9 _-]/', '', $categoryName);

                        // 3. Create category folder if not exists
                        $folderPath = "./images/product/" . $folderName . "/";
                        if (!file_exists($folderPath)) {
                            mkdir($folderPath, 0777, true);
                        }

                        // 4. Destination path for the uploaded image
                        $dst = $folderPath . $photo;

                         // 5. Insert into database
                        $q = mysqli_query($conn, "insert into product_master values('', $cid, '$name', '$desc', $qty, '$price', CURDATE(), '$photo', 0)");
                        if ($q) {
                            move_uploaded_file($_FILES['txtimg']['tmp_name'], $dst);
                            echo "Inserted...";
                        } else
                            echo "Not Inserted....";
                    }
                    ?>
                    <div class="card-body p-4">
                        <form method="post" enctype="multipart/form-data">

                            <!-- Category -->
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="selCat" id="ddlcategory" class="form-control">
                                    <?php
                                    $q = mysqli_query($conn, "select * from catagory_master");
                                    while ($row = mysqli_fetch_array($q)) {
                                        echo "<option value=$row[cid]>$row[cname]</option>";
                                    }
                                    ?>
                                </select>

                            </div>

                            <!-- Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="txtname" class="form-control" placeholder="Enter product name"
                                    required>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label">Price (₹)</label>
                                <input type="number" name="txtprice" class="form-control" placeholder="Enter price"
                                    required>
                            </div>

                            <!-- Quantity -->
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" name="txtqty" class="form-control" placeholder="Enter quantity"
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="txtdesc" rows="3"
                                    placeholder="Enter product description"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label">Product Image</label>
                                <input name="txtimg" type="file" class="form-control" required>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" name="btnsubmit" class="btn btn-custom w-100">Add Product</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<?php
include('footer.php');
?>