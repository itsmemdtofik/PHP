<?php
include "conn.php";
error_reporting(0);
if (isset($_POST["submit"])){
    $a = $_POST['regno'];
    $b = $_POST['uname'];
    $c = $_POST['dte'];
    $d = $_POST['sex'];
    $e = $_POST['dept'];
    $f = $_POST['crs'];
    $g = $_POST['sem'];
    $h = $_POST['adrs'];
    $i = $_POST['ph'];

    if ($a != "" && $b != "" && $c != "" && $d != "" && $e != "" && $f != "" && $g != "" && $h != "" && $i != "") {
        $query = "INSERT INTO register VALUES ('$a','$b','$c','$d','$e','$f','$g','$h,'$i' )";
        $data = mysqli_query($conn, $query);

        if ($data) {

            echo "<script>alert('You have registered successfully.')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/index.html">
	<?php	
        }
    } else {
        echo "<script>alert('Please try again . All Fields are Required')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/index.html">
  <?php
    }
}

?>
