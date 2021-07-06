<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<title>Booking | Page</title>

<head>
    <style type="text/css">
        .full {
            width: 100%;
            height: 100%;
            background-color: indigo;
        }

        .main {
            width: 1250px;
            height: 50px;
            background-color: transparent;
            position: absolute;
            top: 0px;
            margin-right: -10px;
        }

        h3 {

            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
            color: white;
            font-weight: bolder;

        }

        .ccc {
            position: relative;
            top: 5px;
            margin-left: 10px;
            width: 1300px;
            height: 600px;
            background-image: url(2.jpg);
        }

        form {

            border: none;
            float: right;
            width: 600px;
            height: 530px;
            margin-top: 0px;
            margin-right: 60px;
            background-color: rgba(255, 255, 0, 0.4);
            box-shadow: 0 0 10px 3px;
            border-radius: 10px;

        }

        h8 {
            text-align: center;
            position: relative;
            top: 200px;
            left: 100px;
            font-family: sans-serif;
            font-weight: bolder;
            word-spacing: 5px;
            font-size: 30px;
            text-shadow: 1px 10px 0px brown;
            color: aliceblue;
            text-transform: uppercase;

        }

        input[type="text"] {

            width: 250px;
            height: 35px;
            color: black;
            border: none;
            margin-left: 20px;
            padding-left: 10px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 15px;
            outline: none;
            border-bottom: 2px solid deeppink;
            background-color: transparent;
            padding-top: 20px;

        }

        input[type="date"] {

            width: 250px;
            height: 35px;
            color: black;
            border: none;
            margin-left: 20px;
            padding-left: 10px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 20px;
            outline: none;
            border-bottom: 2px solid deeppink;
            background-color: transparent;
            padding-top: 20px;
        }

        input[type="password"] {

            width: 250px;
            height: 35px;
            color: black;
            border: none;
            margin-left: 20px;
            padding-left: 10px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 20px;
            outline: none;
            border-bottom: 2px solid deeppink;
            background-color: transparent;
            padding-top: 20px;

        }

        input[type="submit"] {

            width: 150px;
            height: 35px;
            color: white;
            position: relative;
            top: 12px;
            cursor: pointer;
            border: none;
            margin-left: 12px;
            text-align: center;
            background: cornflowerblue;
            background: linear-gradient(45deg, yellow, black, black, white);
            border-radius: 50px;
            font-weight: bolder;
            font-size: 12px;
            text-transform: uppercase;
            left: 12px;
        }

        input[type="reset"] {

            width: 150px;
            height: 35px;
            color: white;
            border: none;
            position: relative;
            top: 12px;
            margin-left: 20px;
            text-align: center;
            background: cornflowerblue;
            background: linear-gradient(45deg, blue, black, hotpink, black);
            border-radius: 50px;
            cursor: pointer;
            font-family: sans-serif;
            font-weight: bolder;
            text-transform: uppercase;

        }

        input[type="reset"]:hover {

            transition: .3s;
            transform: scale(1.1);
        }

        input[type="submit"]:hover {

            transition: .3s;
            transform: scale(1.1);
        }

        th,
        td {
            padding-top: 10px;
        }

        h3 {
            font-family: sans-serif;
            font-size: 20px;
            font-weight: bolder;
            text-align: center;
            color: black;
        }

        a {
            float: right;
            margin-right: 100px;
            margin-top: 20px;
            font-weight: bolder;
            font-size: 12px;
            font-family: sans-serif;
            font-weight: bolder;
            text-transform: uppercase;
            color: black;
            text-decoration: none;
            background-color: floralwhite;
            width: 80px;
            text-align: center;

        }

        a:hover {
            color: darkred;
        }
    </style>
</head>

<body class="full">
    <div class="main">
        <a href="http://localhost/UpdatingRecord/FlightBooking/login.html">Login</a>
        <a href="http://localhost/UpdatingRecord/FlightBooking/reg.php">Contact</a>
        <a href="http://localhost/UpdatingRecord/FlightBooking/Index.html">About</a>
        <a href="http://localhost/UpdatingRecord/FlightBooking/Index.php">Home</a>
        <a href="http://localhost/UpdatingRecord/FlightBooking/search.php">Search</a>

        <h3>BOOKING.COM</h3>

        <div class="aaa">
            <div class="ccc">
                <div class="professional">
                    <h8>We can be a proessional</h8>
                </div>
                <form action="http://localhost/UpdatingRecord/FlightBooking/Index.php" method="GET">
                    <h3>BOOKING FORM</h3>
                    <table>
                        <tr>
                            <td><input type="text" name="from" placeholder="From">&nbsp;&nbsp;&nbsp;
                            <td><input type="text" name="towhere" placeholder=" To  Where" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="fname" placeholder="Full Name" /></td>
                            <td><input type="text" name="mobileno" placeholder="Mobile Number" /></td>


                        </tr>

                        <tr>
                            <td><input type="text" name="rupees" placeholder="Rs." /></td>
                            <td><input type="text" name="email" placeholder="E-mail" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="city" placeholder="Enter City" /></td>
                            <td><input type="text" name="atime" placeholder="Arrival Time" /></td>

                        </tr>
                        <tr>
                            <td><input type="date" name="date" placeholder="Current Date" /></td>
                            <td><input type="date" name="rdate" placeholder="Return Date" /></td>

                        </tr>

                        <tr>
                            <td><input type="submit" name="submit" value="Submit" /></td>
                            <td><input type="reset" value="Reset" /></td>

                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>


    <?php

if ($_GET["submit"]) {
	$starting = $_GET['from'];
	$ending = $_GET['towhere'];
	$fullname = $_GET['fname'];
	$mobileno = $_GET['mobileno'];
	$rupees = $_GET['rupees'];
	$email = $_GET['email'];
	$date = $_GET['date'];
	$rdate = $_GET['rdate'];
	$city = $_GET['city'];
	$atime = $_GET['atime'];

	if ($starting != "" && $ending != "" && $fullname != "" && $mobileno != "" && $rupees != "" && $email != "" && $date != "" && $rdate != "" && $city != "" && $atime != "") {
		$query = "INSERT INTO booking VALUES ('$starting','$ending','$fullname','$mobileno','$rupees','$email','$city','$date','$rdate','$atime')";
		$data = mysqli_query($conn, $query);

		if ($data) {

			echo "<script>alert('Succesfully Completed ')</script>";
		}
	} else {
		echo "<script>alert('Please try again')</script>";
		echo "<script>alert('Fill all the fields')</script>";
	}
}

?>

</body>

</html>