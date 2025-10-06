<?php
include("header.php");

?>
<?php
include("connectdb.php");
$q = mysqli_query($conn, "select * from catagory_master");
echo "<table border=2 class='table table-stripted'>";
echo "<tr>";
echo "<th>Product No";
echo "<th>Name";
echo "<th>Photo";
echo "<th>Status";
echo "<th colspan=2>Modification";
echo "</tr>";
while ($row = mysqli_fetch_array($q)) {
    echo "<tr align=center>";
    echo "<td>" . $row[0];
    echo "<td>" . $row[1];
    echo "<td><img src='./images/$row[2]' height=100px width=100px/>";
    echo "<td>" . $row['status'];
    echo "<td><a href='delete.php?x=$row[0]'><img src='./images/trash.png' height=50px width=50px/></a>";
    echo "<td><a href='update.php?x=$row[0]'><img src='./images/updated.png' height=50px width=50px/></a>";
    echo "</tr>";
}
echo "</table>";
?>
<?php
include("footer.php");
?>