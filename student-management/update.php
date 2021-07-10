<?php
include "conn.php";
error_reporting(0);
$_GET['fn'];
$_GET['ln'];
$_GET['bd'];
$_GET['gn'];
$_GET['em'];
$_GET['mo'];
$_GET['sb'];
$_GET['ps'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Page</title>
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
        h2 {
            font-family: JetBrains Mono;
            font-weight: bold;
            color: deeppink;
            position: relative;
            top: 0px;
            left: 0px;
        }

        form {
            width: 800px;
            height: 635px;
            position: absolute;
            top: 82px;
            left: 734px;
            background-color: teal;
            border: 1px solid blue;
        }

        table {
            width: 800px;
            height: auto;
            background-color: transparent;
            padding-left: 50px;
            padding-top: 20px;
            border-radius: 10px;
        }

        tr,
        td {
            font-family: JetBrains;
            font-size: 20px;
            font-weight: bolder;
            padding-top: 40px;
        }

        input[type="text"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: sans-serif;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid white;
            font-size: 12px;
            letter-spacing: 5px;
            outline: none;
        }

        input[type="date"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family:sans-serif;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid white;
            font-size: 12px;
            outline: none;
            letter-spacing: 5px;
        }


        input[type="password"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family:sans-serif;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid white;
            font-size: 15px;
            outline: none;
            cursor: pointer;
            letter-spacing: 5px;
        }

        input[type="submit"] {
            width: 100px;
            height: 32px;
            color: white;
            font-family: sans-serif;
            background-color: transparent;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 70px;
            left: 120px;
            border: none;
            border:1px solid black;
            outline: none;
            cursor: pointer;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 2px;



        }

        input[type="submit"]:hover {
            transition: .5s ease;
            transform: scale(1.2);
            color: white;
            background-color: deeppink;
            box-shadow: 0 0 4px white;
        }

        input[type="reset"] {
            width: 100px;
            height: 32px;
            color: white;
            font-family: sans-serif;
            background-color: transparent;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 70px;
            left: 160px;
            border: none;
            border:1px solid black;
            outline: none;
            cursor: pointer;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 2px;



        }

        input[type="reset"]:hover {
            transition: .3s ease;
            transform: scale(1.2);
            color: white;
            background-color: red;
            box-shadow: 0 0 4px white;
        }


        button[type="button"] {
            width: 100px;
            height: 32px;
            color: white;
            font-family: sans-serif;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 70px;
            left: 200px;
            border: 1px solid black;
            background-color: transparent;
            outline: none;
            cursor: pointer;
            border-radius: 100px;
            letter-spacing: 2px;
        }

        button[type="button"]:hover {
            transition: .3s ease;
            transform: scale(1.2);
            color: white;
            background-color: black;
            box-shadow: 0 0 4px white;
        }
        hr{
            width: 230px;
            background-color: white;
            height: 3px;
            position: relative;
            top: 10px;
            left: 285px;
            border-radius: 10px;
            border: none;
            
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
    
<form action="" method="get">
<h4 style="color: white; text-align: center; padding-top: 10px;font-family:sans-serif;;font-weight: bolder;letter-spacing:5px;">UPDATE RECORDS</h4>
<hr>
<table>
    <tr>
        <td><input type="text" name="regno" value="<?php echo $_GET['fn']; ?>" /> </td>
        <td><input type="text" name="uname" value="<?php echo $_GET['ln']; ?>" /></td>
    </tr>
    <tr>
        <td><input type="date" name="dte" value="<?php echo $_GET['bd']; ?>" /></td>
        <td><input type="text" name="gender" value="<?php echo $_GET['gn']; ?>" /></td>
    </tr>
    <tr>
        <td><input type="text" name="dept" value="<?php echo $_GET['em']; ?>" /></td>
        <td><input type="text" name="crs" value="<?php echo $_GET['mo']; ?>" /></td>
    </tr>
    <tr>
        <td><input type="text" name="sem" value="<?php echo $_GET['sb']; ?>" /></td>
        <td><input type="password" name="adrs" value="<?php echo $_GET['ps']; ?>" /></td>
    </tr>
    <tr>
        <td> <input type="text" name="ph" id="" value="<?php echo $_GET['ph'] ?>"> </td>
    </tr>

</table>
<input type="submit" name="submit" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" name="reset" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/StudentManagement/display.php"><button type="button" name="button">RECORDS</button></a>


</form>
<img src="images/update1.jpg" alt="" srcset="" width="733" height="637" style="position: relative;top:82px;left:1px;">

<?php
if ($_GET['submit']) {
$rno = $_GET['regno'];
$nm = $_GET['name'];
$dte = $_GET['dte'];
$sex = $_GET['gender'];
$department = $_GET['dept'];
$crs = $_GET['crs'];
$semester = $_GET['sem'];
$address = $_GET['adrs'];
$phoneno = $_GET['ph'];

$query = " UPDATE reg SET name='$nm', dte='$dte' , gend='$sex' , dept='$department' , course='$crs' , sem='$semester' , address='$adrs' ,phoneno='$phoneno' WHERE regno='$rn' ";
$data = mysqli_query($conn, $query);
if ($data) {
echo "<script>alert('Record updated successfully')</script>";

?>
    <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/StudentManagement/display.php">

<?php

} else {
echo "<script>alert('Record not updated !')</script>";
}
}

?>
</body>

</html>