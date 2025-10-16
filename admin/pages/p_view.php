<?php
include("header.php");
include("connectdb.php");

// Get all products
$q = mysqli_query($conn, "SELECT * FROM product_master");

echo "<table border=2 class='table table-striped'>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Photo</th>";
echo "<th>Rate</th>";
echo "<th>Qty</th>";
echo "<th>Category Name</th>";
echo "<th colspan=2>Modification</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($q)) {
    $productId = $row['pid'];
    $productName = $row['pname'];
    $photo = $row['photo'];
    $rate = $row['rate'];
    $qty = $row['qty'];
    $cid = $row['cid']; // category id from product table

    // Get category name for this product
    $catRes = mysqli_query($conn, "SELECT cname FROM catagory_master WHERE cid = $cid");
    $catRow = mysqli_fetch_assoc($catRes);
    $categoryName = $catRow['cname'];

    // Sanitize category name for folder path
    $categoryFolder = preg_replace('/[^A-Za-z0-9 _-]/', '', $categoryName);

    // Build image path
    $imagePath = "./images/product/" . $photo;

    echo "<tr align='center'>";
    echo "<td>" . htmlspecialchars($productName) . "</td>";

    // Show image or placeholder
    if (file_exists($imagePath)) {
        echo "<td><img src='$imagePath' height='100' width='100'/></td>";
    } else {
        echo "<td><img src='./images/no-image.png' height='100' width='100'/></td>";
    }

    echo "<td>" . htmlspecialchars($rate) . "</td>";
    echo "<td>" . htmlspecialchars($qty) . "</td>";
    echo "<td>" . htmlspecialchars($categoryName) . "</td>";

    echo "<td><a href='delete.php?x=" . $productId . "'><img src='./images/trash.png' height='50' width='50'/></a></td>";
    echo "<td><a href='update.php?x=" . $productId . "'><img src='./images/updated.png' height='50' width='50'/></a></td>";
    echo "</tr>";
}

echo "</table>";

include("footer.php");
?>

