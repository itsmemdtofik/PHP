<?php
error_reporting(0);
include "conn.php";
$name = $_POST['name'];
$pase = $_POST['pass'];

if (isset($_POST['submit'])) {

    if ($name == "aisha") {
        if ($pase == "q1w2e3r4") {
            header('location:http://localhost/StudentManagement/index.html');
?>
            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/login.html">
<?php

        } else {

            echo "<script>alert('Invalid Pasword')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/login.html">
            <?php
        }
    } else {
        echo "<script>alert('Invliad Username')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/login.html">
        <?php
    }
}

?>