<?php
include "conn.php";
error_reporting(0);
if (isset($_POST["submit"])){
    $a = $_POST['sem'];
    $b = $_POST['crs'];
    $c = $_POST['dept'];
    $d=$_POST['regno'];
    $e=$_POST['sname'];
    $f=$_POST['sex'];
    $g=$_POST['date'];
    $h=$_POST['adrs'];
    $i=$_POST['mbno'];
    $j=$_POST['pass'];
  

    if ($a != "" && $b != "" && $c != "" && $d != "" && $e != "" && $f != "" && $g != "" && $h != "" && $i != "" && $j != "") {
        $query = "INSERT INTO reg  VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
        $data = mysqli_query($conn, $query);

        if ($data) {

            echo "<script>alert('You have registered successfully.')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/index.html">
	<?php	
        }
    } else {
        echo "<script>alert('Please try again.')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/index.html">
  <?php
    }
}

?>
