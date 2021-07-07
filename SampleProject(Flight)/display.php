<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY | PAGE</title>
    <style type="text/css">
        h1 {
            font-family: JetBrains Mono;
            font-weight: bold;
            color: black;
            position: absolute;
            top: 1px;
            left: 600px;
            text-shadow: 2px 2px 2px black;
            animation-name: example;
            animation: example 4s infinite;

        }

        @keyframes example {
            0% {
                color: black;
                text-shadow: 2px 2px 5px white;
                text-transform: lowercase;
            }

            25% {
                color: yellow;
                text-shadow: 5px 5px 10px red;
                text-transform: lowercase;
            }

            50% {
                color: blue;
                text-shadow: 5px 5px 10px red;
                text-transform: lowercase;
            }

            100% {
                color: green;
                text-shadow: 5px 5px 10px blue;
                text-transform: lowercase;
            }
        }

        h2 {
            font-family: JetBrains Mono;
            font-weight: bold;
            color: orange;
            position: relative;
            top: 0px;
            left: 0px;
        }

        table {
            font-family: JetBrains Mono;
            font-size: 13px;
            border-collapse: collapse;
            width: 100%;


        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
            cursor: pointer;
        }

        table tr:nth-child(even) {
            background-color: rgba(0, 0, 0, .2);
            color: black;
        }

        table tr:hover {
            background-color: #ddd;
            color: black;
            cursor: pointer;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: black;
            text-transform: uppercase;
        }

        input[type="button"] {
            position: relative;
            top: 30px;
            left: 550px;
            background-color: purple;
            color: white;
            word-spacing: 1px;
            font-family: sans-serif;
            font-size: 10px;
            font-weight: bolder;
            border-radius: 1px;
            width: 100px;
            height: 30px;
            border: none;
            outline: inherit;
            border-radius: 100px;
            cursor: pointer;
            box-shadow: 0 0 3px 1px black;
        }

        input[type="button"]:hover {
            transition: .5s ease;
            transform: scale(1.2);
            background-color: black;
            color: white;
        }
        a{
            color: blue;
            font-family: sans-serif;
            font-weight: bolder;
            font-size: 12px;
            text-transform: uppercase;

        }
        a:hover{

            color: red;
        }
    </style>
</head>

<body bgcolor="whitesmoke">

    <?php

error_reporting(0);
$query = "SELECT * FROM reg ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {

	?>
        <table border="1">
            <tr>
                <th>RollNo</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Email</th>
                <th>MoblieNo</th>
                <th>Subject</th>
                <th>Password</th>
                <th>update</th>
                <th>delete</th>

            </tr>

        <?php

	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>
            <td>" . $result['rollNo'] . "</td>
            <td>" . $result['name'] . "</td>
            <td>" . $result['birthday'] . "</td>
            <td>" . $result['gender'] . "</td>
            <td>" . $result['email'] . "</td>
            <td>" . $result['mobileno'] . "</td>
            <td>" . $result['subject'] . "</td>
            <td>" . $result['password'] . "</td>
            <td><a href='update.php?fn=$result[rollNo]&ln=$result[name]&bd=$result[birthday]&gn=$result[gender]&em=$result[email]&mo=$result[mobileno]&sb=$result[subject]&ps=$result[passwd]'>Edit</a></td>
             <td><a href='http://localhost/UpdatingRecord/delete.php?rollNo=$result[rollNo]' onclick='return checkdelete()'>Delete</a></td>
            </tr>";

		/* <td><a href='http://localhost/UpdatingRecordProject/delete.php?fname=$result[firstname]' onclick='return checkdelete()'>Delete</a></td>
            </tr>";*/
	}
} else {
	echo "<script>alert(' Record  not Found')</script>";
}

?>
        </table>
        <script type="text/javascript">
            function checkdelete() {
                return confirm("Are you sure that you want to delete this data...");
            }
        </script>
        <a href="http://localhost/UpdatingRecord/export.php"> <input type="button" value="DOWNLOAD" style="position:relative;top: 30px; left: 550px;
                background-color: red;box-shadow:0 0 3px 1px black;color: white;font-weight: bolder;font-family: sans-serif;font-size: 10px;width: 100px;height: 30px; outline:inherit;border-radius:100px;
                cursor: pointer;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://localhost/UpdatingRecord/register.html"><input type="button" value="INSERT"></a>
</body>

</html>