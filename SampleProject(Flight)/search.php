<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Searching | Page</title>
    <style type="text/css">
        .table {
            width: 100%;
            height: auto;
            margin-right: 20px;
            background: aqua;
            background-color: ghostwhite;
            outline: none;
        }

        table {
            font-family: sans-serif;
            border-collapse: collapse;
            width: 99%;
            font-size: 12px;

        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            font-family: sans-serif;
            text-align: left;
            background-color: darkslategray;
            color: white;
            text-transform: uppercase;
            font-size: 12px;
        }

        form {
            margin-left: 360px;
        }

        input[type="search"] {
            width: 220px;
            height: 30px;
            background-color:#ffff;
            border: 1px solid deepskyblue;
            color: deeppink;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bolder;
            padding-left: 30px;
            border-radius: 3px;
            outline:none;
            position: relative;
            left: 150px;


        }

        input[type="submit"] {
            width: 40px;
            height: 28px;
            background-color: black;
            color: white;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bolder;
            cursor: pointer;
            position: relative;
            left:102px;
            border: none;
            border-radius: 3px;
        }
        input[type="submit"]:active{
            background-color:cornflowerblue;
            color: black;
            border:1px solid black;

        }
        input[type="button"] {

            width: 100px;
            height: 20px;
            background-color: seashell;
            color: black;
            font-weight: bolder;
            font-size: 10px;
            text-transform: uppercase;
            position: relative;
            top: 30px;
            left: 550px;
            cursor: pointer;
            text-align: center;
            border-radius: 10px;
            font-family: sans-serif;
            border: none;
            border-bottom-color:1px solid red;
            border-top-color: black;
            box-shadow: 0 0 3px 1px black;
        }

        input[type="button"]:hover {
            background-color: black;
            color: white;
            transition: all .2s ease;
            transform: scale(1.2);
        }
    </style>
</head>

<body class="table">
    <form name="" action="" method="get">
        <input type="search" name="search" autocomplete="off" placeholder="Search" />
        <input type="submit" value="OK" name="submit" />
    </form><br><br>
    <table>
        <tr>
            <th>From</th>
            <th>toWhere</th>
            <th>First Name</th>
            <th>Mobile No</th>
            <th>Rs.</th>
            <th>E-mail</th>
            <th>City</th>
            <th>Current Date</th>
            <th>Return Date</th>
            <th>Arrival Time</th>

        </tr>
        <?php
include "conn.php";
if (isset($_GET['submit'])) {
	$first_name = $_GET['search'];
	if ($first_name != "") {
		$query = "SELECT * FROM booking WHERE fname ='$first_name'";
		$data = mysqli_query($conn, $query);
		while ($result = mysqli_fetch_assoc($data)) {
			?>
                    <tr>
                        <td><?php echo $result['from']; ?></td>
                        <td><?php echo $result['towhere']; ?></td>
                        <td><?php echo $result['fname']; ?></td>
                        <td><?php echo $result['mobileno']; ?></td>
                        <td><?php echo $result['rupees']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['city']; ?></td>
                        <td><?php echo $result['date']; ?></td>
                        <td><?php echo $result['rdate']; ?></td>
                        <td><?php echo $result['atime']; ?></td>
                    </tr>
        <?php

		}
	} else {

		echo "<script>alert('Record Not found')</script>";
	}
}
?>
    </table>
    <a href="http://localhost/UpdatingRecord/FlightBooking/Index.php"><input type="button" name="button" value="Home"></a>
</body>

</html>