<?php
include "conn.php";
$rollNo = $_GET['rollNo'];
$query = "DELETE FROM reg WHERE ROLLNO='$rollNo'";

/*$fname=$_GET['fname'];
$query = "DELETE FROM registerpage WHERE FIRSTNAME='$fname'";*/

$data = mysqli_query($conn, $query);
if ($data) {
	echo "<script>alert('Record has been deleted')</script>";
	?>

	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/UpdatingRecord/display.php">


<?php

} else {
	echo "<script>alert('Record has not been deleted')</script>";
}

?>