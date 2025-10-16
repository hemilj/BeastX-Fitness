<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .dashboard-card {
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }
    .dashboard-card:hover {
      transform: translateY(-5px);
    }
    .dashboard-icon {
      font-size: 3rem;
      opacity: 0.8;
    }
    .tot-cat{
      background-color: #abebcdff;
    }
    .tot-pro{
      background-color: #f4c6c2ff;
    }
    .tot-user{
      background-color: #d6b6ecff;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-4 text-center fw-bold">📊 Dashboard Overview</h2>
    <div class="row g-4">
      
      <!-- Total Categories -->
      <div class="col-md-4 col-sm-6">
        <div class="dashboard-card tot-cat text-dark text-center">
          <i class="bi bi-tags-fill dashboard-icon"></i>
          <h4 class="mt-3">Total Categories</h4>
          <h2><?php 
          include('connectdb.php');
          $q=mysqli_query($conn,"select * from catagory_master");
          if($q)
          {
            $total_category=mysqli_num_rows($q);
            echo $total_category;
          }
          ?></h2>
        </div>
      </div>

      <!-- Total Products -->
      <div class="col-md-4 col-sm-6">
        <div class="dashboard-card tot-pro text-dark text-center">
          <i class="bi bi-box-seam-fill dashboard-icon"></i>
          <h4 class="mt-3">Total Products</h4>
          <h2><?php 
          $q=mysqli_query($conn,"select * from product_master");
          if($q)
          {
            $total_products=mysqli_num_rows($q);
            echo $total_products;
          }
          ?></h2>
        </div>
      </div>

      <!-- Total Users -->
      <div class="col-md-4 col-sm-6">
        <div class="dashboard-card tot-user text-dark text-center">
          <i class="bi bi-people-fill dashboard-icon"></i>
          <h4 class="mt-3">Total Users</h4>
          <h2><?php 
          $q=mysqli_query($conn,"select * from register");
          if($q)
          {
            $total_user=mysqli_num_rows($q);
            echo $total_user;
          }
          ?></h2>
        </div>
      </div>

      

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include('footer.php');
?>