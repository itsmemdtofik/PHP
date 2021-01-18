<?php
session_start();
include("connection.php");
error_reporting(0);
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{
    
}
else
{
    header('location:http://localhost/UpdatingRecordProject/login.php');
}

    $query = "SELECT * FROM loginpage WHERE name='$userprofile'";
    $data = mysqli_query($conn,$query); 
    $result=mysqli_fetch_assoc($data);
    echo "<h2>WELCOME</h2>"."<h1>".$result['name']."</h1>";
   


$_GET['fn'];
$_GET['ln'];
$_GET['bd'];
$_GET['gn'];
$_GET['em'];
$_GET['mo'];
$_GET['sb'];
$_GET['ps'];
s

?>
<a href="http://localhost/UpdatingRecordProject/logout.php" title="http://localhost/UpdatingRecordProject/login.php" style="font-weight: bolder;font-family:JetBrains Mono "> LOGOUT
</a>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE | PAGE</title>
    <style type="text/css">
          h2 {
            font-family: JetBrains Mono;
            font-weight: bold;
            color: deeppink;
            position: relative;
            top: 0px;
            left: 0px;
        }
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
                text-transform: uppercase;
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

        .bbb {
            background-color: aliceblue;
        }

        form {
            width: 800px;
            height: 500px;
            margin-left: 300px;
            margin-top: 30px;
            background-color: brown;
            border-radius: 12px/10px;
            box-shadow: 0 0 3px 3px black ;

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
            color: white;
            font-family: JetBrains Mono;
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
            color: white;
            font-family: JetBrains Mono;
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
            color: white;
            font-family: JetBrains Mono;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid hotpink;
            font-size: 15px;
            outline: none;
            cursor: pointer;
        }

        input[type="submit"] {
          width: 100px;
            height: 32px;
            color: white;
            font-family: sans-serif;
            background-color: purple;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 80px;
            left: 120px;
            border:none;
            border-left:-1px solid yellow;
            outline: none;
            cursor: pointer;
            border-radius: 100px;
            text-transform: uppercase;



        }
        input[type="submit"]:hover{
            transition: .5s ease;
            transform: scale(1.2);
            color: white;
            background-color: brown;
            box-shadow: 0 0 4px white;
        }

        input[type="reset"] {
            width: 100px;
            height: 32px;
            color: white;
            font-family: sans-serif;
            background-color: green;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 80px;
            left: 160px;
            border:none;
            border-left:-1px solid yellow;
            outline: none;
            cursor: pointer;
            border-radius: 100px;
            text-transform: uppercase;



        }
        input[type="reset"]:hover{
             transition: .5s ease;
            transform: scale(1.2);
            color: white;
            background-color: red;
            box-shadow: 0 0 4px white;
        }


        button[type="button"] {
            width: 100px;
            height: 32px;
            color: wheat;
            font-family: sans-serif;
            background-color: darkslategrey;
            font-size: 10px;
            text-align: center;
            position: relative;
            top: 80px;
            left: 200px;
            border:none;
            border-left:-1px solid yellow;
            outline: none;
            cursor: pointer;
            border-radius: 100px;



        }
        button[type="button"]:hover{
            transition: .5s ease;
            transform: scale(1.2);
            color: white;
            background-color: black;
            box-shadow: 0 0 4px white;
        }

    </style>
</head>

<body class="bbb">

    <form action="" method="get">

        <h3 style="color: white; text-align: center;padding-top: 10px;font-family: JetBrains Mono;text-shadow: 0 0 3px white;font-weight: bolder;">UPDATE RECORDS</h3>

        <table>
            <tr>
                <td><input type="text" name="fname" value="<?php echo $_GET['fn'];?>" /> </td>
                <td><input type="text" name="lname" value="<?php echo $_GET['ln'];?>" /></td>
            </tr>
            <tr>
                <td><input type="date" name="birthday" value="<?php echo $_GET['bd'];?>" /></td>
                <td><input type="text" name="gender" value="<?php echo $_GET['gn'];?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="email" value="<?php echo $_GET['em'];?>" /></td>
                <td><input type="text" name="mobileno" value="<?php echo $_GET['mo'];?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" value="<?php echo $_GET['sb']; ?>" /></td>
                <td><input type="password" name="password" value="<?php echo $_GET['ps'];?>" /></td>
            </tr>

        </table>
        <input type="submit" name="submit" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="Reset" name="reset" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://localhost/UpdatingRecordProject/display.php"><button type="button" name="button">DISPLAY</button></a>


    </form>
    <?php
    include("connection.php");
    

    if($_GET['submit'])
    {

    $fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$birthday = $_GET['birthday'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$mobileno = $_GET['mobileno'];
	$subject = $_GET['subject'];
	$password = $_GET['password'];

    $query = " UPDATE registerpage SET LASTNAME='$lname', BIRTHDAY='$birthday' , GENDER='$gender' , EMAIL='$email' , MOBILENO='$mobileno' , SUBJECT='$subject' , PASSWORD='$password' WHERE FIRSTNAME='$fname' ";
    $data=mysqli_query($conn,$query);
    if($data)
    {
    	echo "<script>alert('Record updated successfully')</script>";

        ?>
    <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/UpdatingRecordProject/display.php">

    <?php

    }
    else
    {
    	echo "<script>alert('Record not updated !')</script>";
    }
}


    ?>
</body>

</html>
