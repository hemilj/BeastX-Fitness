<?php 
    include("header.php");
?>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    #preview {
      max-width: 100%;
      max-height: 200px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 10px;
      display: none;
    }
  </style>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header text-center bg-dark text-white">
            <h4>Add Product</h4>
          </div>
          <div class="card-body">
            <?php 
              include("connectdb.php");
              if(isset($_POST['btnsubmit']))
              {
                $name=$_POST['txtname'];
                $photo=$_FILES['txtphoto']['name'];
                $dst="./images/".$photo;
                $q=mysqli_query($conn,"insert into catagory_master values('','$name','$photo',0)");
                if($q)
                {
                  move_uploaded_file($_FILES['txtphoto']['tmp_name'],$dst);
                  echo "Inserted...";
                }else
                  echo "Not Inserted....";
              }
            ?>
            <form id="categoryForm" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="categoryName" class="form-label">Product Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="categoryName"
                  name="txtname"
                  placeholder="Enter category name"
                  required
                />
              </div>

              <div class="mb-3">
                <label for="categoryPhoto" class="form-label">Product Photo</label>
                <input
                  type="file"
                  class="form-control"
                  id="categoryPhoto"
                  name="txtphoto"
                  accept="image/*"
                  required
                />
                <img id="preview" class="img-fluid mt-2" />
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript for image preview -->
  <script>
    const photoInput = document.getElementById('txtphoto');
    const preview = document.getElementById('preview');

    photoInput.addEventListener('change', function () {
      const file = this.files[0];
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
      } else {
        preview.style.display = 'none';
      }
    });

    document.getElementById('categoryForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Category submitted!');
      this.reset();
      preview.style.display = 'none';
    });
  </script>


    
<?php 
    include("footer.php");
?>