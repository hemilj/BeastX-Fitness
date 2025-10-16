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
            <h4>Add Trainer</h4>
          </div>
          <div class="card-body">
            <?php 
              include("connectdb.php");
              if(isset($_POST['btnsubmit']))
              {
                $name=$_POST['txtname'];           
                $desc=$_POST['txtdesc'];           
                $role=$_POST['txtrole'];           
                $photo=$_FILES['txtphoto']['name'];
                $dst="./images/trainer/".$photo;
                $q=mysqli_query($conn,"insert into trainer_master values('','$name','$desc','$role','$photo')");
                if($q)
                {
                  move_uploaded_file($_FILES['txtphoto']['tmp_name'],$dst);
                  echo "<script>alert('Inserted...')</script>";
                }else
                  echo "<script>alert('Not Inserted....')</script>";
              }
            ?>
            <form id="categoryForm" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="Trainername" class="form-label">Trainer Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="trainerid"
                  name="txtname"
                  placeholder="Enter Trainer name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="Trainerdesc" class="form-label">Trainer Description</label>
                <textarea
                  type="text"
                  class="form-control"
                  id="trainerdesc"
                  name="txtdesc"
                  placeholder="Enter Trainer Description"
                  required
                ></textarea>
              </div>
            <div class="mb-3">
                <label for="Trainerrole" class="form-label">Trainer Role</label>
                <input
                  type="text"
                  class="form-control"
                  id="trainerrole"
                  name="txtrole"
                  placeholder="Enter Trainer Role"
                  required
                />
              </div>

              <div class="mb-3">
                <label for="TrainerPhoto" class="form-label">Trainer Photo</label>
                <input
                  type="file"
                  class="form-control"
                  id="TrainerPhoto"
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