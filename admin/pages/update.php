<?php 
    include("header.php");

?>
<?php 
    include("connectdb.php");
    $pno=$_GET['x'];
    $q=mysqli_query($conn,"select * from catagory_master where cid=$pno");
    $row=mysqli_fetch_array($q);
    if(isset($_POST['btnedit']))
    {
        $name=$_POST['txtname'];
        $photo=$_FILES['txtphoto']['name'];
        $dst="./images/".$photo;
        $q=mysqli_query($conn,"update catagory_master set cname='$name',photo='$photo' where cid=$pno");
        if($q)
        {
            move_uploaded_file($_FILES['txtphoto']['tmp_name'],$dst);
            echo "<script> window.location.href='view.php'</script>";
        }
        else
            echo "Not Edited...";
    }
?>

<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header text-center bg-dark text-white">
            <h4>UPdate Product</h4>
          </div>
          <div class="card-body">
            <form id="categoryForm" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="categoryName" class="form-label">Product Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="categoryName"
                  name="txtname"
                  placeholder="Enter category name"
                  value="<?php echo $row[2];?>"
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
                  value="<img src=./images/<?php echo $row[3];?>/>"
                  required
                />
                <img id="preview" class="img-fluid mt-2" />
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="btnedit">Edit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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