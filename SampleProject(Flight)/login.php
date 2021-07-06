<?php

include "conn.php";

$name = $_POST['uname'];
$pase = $_POST['passwd'];

if (isset($_POST['submit'])) {

	if ($name == "tofik") {

		if ($pase == "q1w2e3r4") {

			header('location:http://localhost/UpdatingRecord/FlightBooking/Index.php');

			?>

            <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/UpdatingRecord/FlightBooking/login.html">


<?php

		} else {

			echo "<script>alert('Invalid Pasword')</script>";
		}
	} else {
		echo "<script>alert('Invliad Username')</script>";
	}
}

?>