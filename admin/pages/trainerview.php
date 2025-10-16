<?php
include("header.php");

?>
<style>
    .table-header th {
        background-color: #3f4d67 !important;
        color: #fff !important;
    }

    .desc-col {
        max-width: 300px;
        white-space: normal;
        word-wrap: break-word;
    }

    .table td,
    .table th {
        white-space: normal !important;
        /* Allow text to wrap */
        word-wrap: break-word;
        /* Break long words */
        max-width: 250px;
        /* Set a max width for description */
        text-align: center;
        /* Keep alignment neat */
        vertical-align: middle;
        /* Center vertically */
    }

    .table td:nth-child(4) {
        max-width: 300px;
        /* You can adjust this */
        white-space: normal;
        word-wrap: break-word;
    }
</style>
<div class="container mt-4">
    <div class="table-responsive">
        <?php
        include("connectdb.php");
        $q = mysqli_query($conn, "select * from trainer_master");
        echo "<table border=2 class='table table-stripted align-middle text-center'>";
        echo "<tr class='table-header'>";
        echo "<th>Trainer No";
        echo "<th>Photo";
        echo "<th>Trainer Name";
        echo "<th>Trainer Description";
        echo "<th>Trainer Role";
        echo "<th colspan=2>Modification";
        echo "</tr>";
        while ($row = mysqli_fetch_array($q)) {
            echo "<tr align=center>";
            echo "<td>" . $row[0];
            echo "<td><img src='./images/trainer/$row[4]' height=100px width=100px/>";
            echo "<td>" . $row[1];
            echo "<td class='desc-col'>" . $row[2];
            echo "<td>" . $row[3];
            echo "<td><a href='delete.php?x=$row[0]'><img src='./images/trash.png' height=50px width=50px/></a>";
            echo "<td><a href='update.php?x=$row[0]'><img src='./images/updated.png' height=50px width=50px/></a>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</div>
<?php
include("footer.php");
?>