<?php
include("header.php");
?>
<?php
include('connectdb.php');
$q = mysqli_query($conn, "select * from register where status=0");
echo "<table border=2 class='table table-striped table-hover text-center'>";
$c = 1;
echo "<tr>";
echo "<th>Id";
echo "<th>Name";
echo "<th>Email";
echo "<th>Phone Number";
echo "<th>Password";
echo "<th>Gender";
echo "<th>Action";

echo "</tr>";
while ($row = mysqli_fetch_array($q)) {
    echo "<tr>";
    echo "<td align=center>" . $c;
    echo "<td>" . $row["username"];
    echo "<td>" . $row["email"];
    echo "<td>" . $row["pnumber"];
    echo "<td>" . $row["password"];
    echo "<td>" . $row["gender"];


    echo "<td><a href=user_update.php?x=$row[0]><button type='submit' class='btn btn-danger'><i class='bi bi-trash'></i> Block </button></a>";

    echo "</tr>";
    $c += 1;
}
echo "</table>";
?>
<?php
include("footer.php");
?>