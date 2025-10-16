<?php
include("header.php");
?>
<?php
include('connectdb.php');
$q=mysqli_query($conn,"select * from register where status = 1");
echo "<table border=2 class='table table-striped table-hover text-center'>";
$c=1;
echo "<tr>";
echo "<th>Id";
echo "<th>Name";
echo "<th>Email";
echo "<th>Phone Number";
echo "<th>Password";
echo "<th>Gender";


echo "</tr>";
while($row=mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td align=center>".$c;
    echo "<td>".$row["username"];
    echo "<td>".$row["email"];
    echo "<td>".$row["pnumber"];    
    echo "<td>".$row["password"];
    echo "<td>".$row["gender"];
    echo "</tr>";
    $c+=1;
}
echo"</table>";
?>
<?php
include("footer.php");
?>