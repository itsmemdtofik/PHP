<?php
include "conn.php";
error_reporting(0);
$rollNo = $_GET['regno'];
$sname=$_GET['name'];
$query = "DELETE FROM reg WHERE name='$sname'";

/*$fname=$_GET['fname'];
$query = "DELETE FROM registerpage WHERE FIRSTNAME='$fname'";*/

$data = mysqli_query($conn, $query);
if ($data) {
	echo "<script>alert('Record has been deleted')</script>";
	?>

	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/display.php">


<?php

} else {
	echo "<script>alert('Record has not been deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/display.php">
	<?php
}

?>