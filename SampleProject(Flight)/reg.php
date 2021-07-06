<?php
error_reporting(0);
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact | Page</title>
    <style type="text/css">
        form {
            width: 800px;
            height: 550px;
            margin-left: 300px;
            margin-top: 30px;
            background-color: indigo;
            border-radius: 123px/10px;

        }

        table {
            width: 800px;
            height: auto;
            background-color: rgba(255, 255, 344, 0.9);
            padding-left: 50px;
            padding-top: 20px;
            border-radius: 10px;
        }

        tr,
        td {
            font-family: consolas;
            font-size: 20px;
            font-weight: bolder;
            padding-top: 40px;
        }

        input[type="text"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: consolas;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid deeppink;
            font-size: 15px;
            outline: none;


        }

        input[type="date"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: consolas;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid deeppink;
            font-size: 15px;
            outline: none;
        }


        input[type="password"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: consolas;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid hotpink;
            font-size: 15px;
            outline: none;
        }

        textarea {
            width: 300px;
            height: 30px;
            color: black;
            font-family: consolas;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid hotpink;
            font-size: 15px;
            outline: none;
        }

        input[type="submit"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: sans-serif;
            font-weight: bolder;
            background: transparent;
            border: 1px solid black;
            font-size: 12px;
            cursor: pointer;
            text-transform: uppercase;
        }

        input[type="submit"]:active {
            color: white;
            font-family: sans-serif;
            font-weight: bolder;
            background: linear-gradient(45deg, black, blue, deeppink);
            border: none;
            font-size: 12px;
            /*border-radius: 12px/10px;*/
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
        }

        input[type="reset"] {
            width: 300px;
            height: 30px;
            color: white;
            font-family: sans-serif;
            font-weight: bolder;
            background: linear-gradient(45deg, black, blue, deeppink);
            border: none;
            font-size: 12px;
            /*border-radius: 12px/10px;*/
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
        }

        input[type="reset"]:active {
            color: black;
            font-family: sans-serif;
            font-weight: bolder;
            background: transparent;
            border: none;
            font-size: 12px;
            cursor: pointer;
            text-transform: uppercase;
            box-shadow: 0 0 1px 1px blue;
        }

        a {
            font-size: 13px;
            color: white;
            text-transform: uppercase;
            font-family: sans-serif;
            text-align: center;
            position: relative;
            top: 15px;
            left: 360px;
            font-weight: bolder;
        }

        a:hover {
            color: red;
            transition: .4s ease;
        }
    </style>
</head>

<body bgcolor="lightblue">

    <form action="http://localhost/UpdatingRecord/FlightBooking/reg.php" method="GET">

        <h2 style="color: deeppink; text-align: center;padding-top: 10px;font-family: consolas;">REGISTER</h2>

        <table>
            <tr>
                <td><input type="text" name="fname" placeholder="Enter First Name" autocomplete="off"> </td>
                <td><input type="text" name="lname" placeholder="Enter Last Name" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="date" name="birthday" placeholder="Birthday" autocomplete="off"></td>
                <td><input type="text" name="gender" placeholder="Enter Gender"></td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Enter Email" autocomplete="off"></td>
                <td><input type="text" name="mobileno" placeholder="Enter Mobile No" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" placeholder="Enter Message..." autocomplete="off"></td>
                <td><input type="password" name="password" placeholder="Enter Password" autocomplete="off"></td>
            </tr>
            <tr>

                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="Reset" name="reset" value="Reset"></td>
            </tr>



        </table>
        <a href="http://localhost/UpdatingRecord/FlightBooking/Index.php">Home Page</a>

    </form>



    <?php

if ($_GET["submit"]) {
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$birthday = $_GET['birthday'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$mobileno = $_GET['mobileno'];
	$subject = $_GET['subject'];
	$password = $_GET['password'];

	if ($fname != "" && $lname != "" && $birthday != "" && $gender != "" && $email != "" && $mobileno != "" && $subject != "" && $password != "") {
		$query = "INSERT INTO contact VALUES ('$fname','$lname','$birthday','$gender','$email','$mobileno','$subject','$password' )";
		$data = mysqli_query($conn, $query);

		if ($data) {

			echo "<script>alert('You have bee contacted to us.')</script>";
			echo "<script>alert('We will provide facility to you.')</script>";
		}
	} else {
		echo "<script>alert('Please try again . All Fields are Required')</script>";
	}
}

?>
</body>

</html>