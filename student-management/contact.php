<?php
include "conn.php";
error_reporting(0);
if (isset($_GET["submit"])) {
	$name = $_GET['name'];
	$email = $_GET['email'];
	$message = $_GET['message'];
	

	if ($name != "" && $email != "" && $message != "") {
		$query = "INSERT INTO contact VALUES ('$name','$email','$message' )";
		$data = mysqli_query($conn, $query);

		if ($data) {

			echo "<script>alert('You have bee contacted to us.')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/contact.html">
	<?php		
		}
	} else {
		echo "<script>alert('Please try again . All Fields are Required')</script>";
	}
}

?>