<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Page</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }

        .text {
            position: absolute;
            margin-left: 50%;
            margin-top: 2%;
            transform: translate(-50%, -50%);
            background: lightskyblue;
            width: 100%;
            height: 100px;
            left: 0;
            border-bottom: 1px solid black;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
        }

        ul li {
            font-size: 40px;
            letter-spacing: 10px;
            text-shadow: 1px 5px 10px #000042;
            font-family: sans-serif;
        }

        ul li:nth-child(1) {
            padding-left: 100px;
            padding-top: 20px;
            color: #fff;
        }

        ul li:nth-child(2) {
            color: purple;
            padding-top: 20px;
        }

        ul li:nth-child(3) {
            color: orange;
            padding-top: 20px;
        }

        ul li:nth-child(4) {
            color: blue;
            padding-top: 20px;
        }

        ul li:nth-child(5) {
            color: white;
            padding-top: 20px;
        }

        ul li:nth-child(6) {
            color: black;
            padding-top: 20px;
        }

        ul li:nth-child(7) {
            color: red;
            padding-top: 20px;
        }

        ul li:nth-child(8) {
            color: snow;
            padding-top: 20px;
        }

        .table {
            width: 100%;
            height: auto;
            margin-right: 20px;
            outline: none;
        }

        table {
            font-family: sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
            position: relative;
            top: 43px;
            border: none;


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
            background-color: blueviolet;
            color: white;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 5px;
        }

        form {
            margin-left: 360px;
        }


        input[type="search"] {
            width: 400px;
            height: 50px;
            background-color: seashell;
            color: black;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: bolder;
            padding-left: 30px;
            border-radius: 3px;
            outline: none;
            position: relative;
            left: 200px;
            top: 81px;
            letter-spacing: 5px;
            border-bottom: 2px solid black;
        }

        input[type="submit"] {
            width: 80px;
            height: 50px;
            background-color: black;
            color: white;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bolder;
            cursor: pointer;
            position: relative;
            left: 115px;
            top: 80px;
            border: none;
            border-radius: 3px;
            letter-spacing: 5px;
        }

        input[type="submit"]:active {
            background-color: cornflowerblue;
            color: black;
            border: 1px solid black;

        }

        input[type="button1"] {

            width: 200px;
            height: 40px;
            background-color: red;
            color: white;
            font-weight: bolder;
            font-size: 12px;
            text-transform: uppercase;
            position: relative;
            top: 400px;
            left: 600px;
            cursor: pointer;
            text-align: center;
            font-family: sans-serif;
            border: 1px solid black;
            letter-spacing: 5px;
        }

        input[type="button1"]:hover {
            background-color: gainsboro;
            color: black;
            transition: all .2s ease;

        }

        input[type="button2"] {

            width: 200px;
            height: 40px;
            background-color: transparent;
            color: black;
            font-weight: bolder;
            font-size: 12px;
            text-transform: uppercase;
            position: relative;
            top: 400px;
            left: 600px;
            cursor: pointer;
            text-align: center;
            font-family: sans-serif;
            border: 1px solid black;
            letter-spacing: 5px;
        }

        input[type="button2"]:hover {
            background-color: gainsboro;
            color: black;
            transition: all .2s ease;

        }
    </style>
</head>

<body>
    <div class="text">
        <img src="images/logo.jpeg" alt="" style="width: 70px;height: 70px;border-radius: 100%;float: left;padding-top: 30px;cursor: pointer;">
        <ul>
            <li>Dr.</li>&nbsp;&nbsp;&nbsp;
            <li>T</li>&nbsp;&nbsp;&nbsp;
            <li>M</li>&nbsp;&nbsp;&nbsp;
            <li>A</li>&nbsp;&nbsp;&nbsp;
            <li>Pai</li>&nbsp;&nbsp;&nbsp;
            <li>Polytechnic</li>&nbsp;&nbsp;&nbsp;
            <li>Manipal</li>&nbsp;&nbsp;&nbsp;
            <li>- 576104</li>
        </ul>
    </div>
    <div class="table">
        <form name="" action="" method="get">
            <input type="search" name="search" autocomplete="off" placeholder="Search" />
            <input type="submit" value="OK" name="submit" />
        </form><br><br>
        <table>
            <tr>
                <th>Register Number</th>
                <th>Name</th>
                <th>Date</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Course</th>
                <th>Semester</th>
                <th>Address</th>
                <th>Phoneno</th>
            </tr>
            <?php
            include "conn.php";
            if (isset($_GET['submit'])) {
                $first_name = $_GET['search'];
                if ($first_name != "") {
                    $query = "SELECT * FROM reg WHERE fname ='$first_name'";
                    $data = mysqli_query($conn, $query);
                    while ($result = mysqli_fetch_assoc($data)) {
            ?>
                        <tr>
                            <td><?php echo $result['regno']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['dte']; ?></td>
                            <td><?php echo $result['gend']; ?></td>
                            <td><?php echo $result['dept']; ?></td>
                            <td><?php echo $result['course']; ?></td>
                            <td><?php echo $result['sem']; ?></td>
                            <td><?php echo $result['address']; ?></td>
                            <td><?php echo $result['phoneno']; ?></td>

                        </tr>
            <?php

                    }
                } else {

                    echo "<script>alert('Record Not found')</script>";
                }
            }
            ?>
        </table>
        <a href="http://localhost/StudentManagement/index.html"><input type="button1" name="button" value="Home"></a>
        <a href="http://localhost/StudentManagement/display.php"><input type="button2" name="button" value="Records"></a>
    </div>

</body>

</html>