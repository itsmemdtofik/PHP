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
    header('location:http://localhost/session_php/login.php');
}
	$query = "SELECT * FROM LOGIN_DEMO WHERE username='$userprofile'";
    $data = mysqli_query($conn,$query); 
    $result=mysqli_fetch_assoc($data);
    echo "Welcome"  .$result['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Logout System</title>
    <style type="text/css">
       a
        {
            font-family: sans-serif;
            font-size: 20px;
            color: black;
            font-weight: bold;
            position: relative;
            top: 20px;
            left: 300px;
            
        }
        a:hover{
            color: blue;
        }
    </style>
</head>

<body>
    <p align="justify">
        <img src="s4.jpeg" alt="" height='240' width='200' align="left" hspace="20" />
        <h1>I followed my heart.<br>
            I believe in myself.<br>
            I live by high standards. <br>
            I treat others the way I want to be treated. <br>
            I understand how precious time is. <br>
            I look for positivity in all things. <br>
            I trust my intuition. <br>
            I trust my intuition. <br>
            I speak up.
        </h1>
    </p>
    <a href="http://localhost/session_php/logout.php">Logout</a>
</body>
</html>
