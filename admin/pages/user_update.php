<?php
include("header.php");
?>
<?php
    include("connectdb.php");
    $id=$_GET["x"];
    // $q=mysqli_query($con,"select * from user_master where uid=$id");
    // $row=mysqli_fetch_array($q);
    
        $q=mysqli_query($conn,"update register set status = 1 where rid=$id");
        if($q)
        {
            
            echo "<script>window.location.href='currentuser.php'</script>";
          }
        else
        {
            echo "not blocked ..";
        }
    
?>
<?php
include("footer.php");
?>