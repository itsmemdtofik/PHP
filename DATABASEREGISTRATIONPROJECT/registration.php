<?php
session_start();
include "connection.php";
error_reporting(0);
$userprofile = $_SESSION['user_name'];
if ($userprofile == true) {
 
} else {
   

}

$query = "SELECT * FROM loginpage WHERE name='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
echo "<h2>WELCOME</h2>" . "<h1>" . $result['name'] . "</h1>";

?>
<a href="http://localhost/UpdatingRecordProject/logout.php"
style="font-size: 15px;font-family:JetBrains Mono;color: black" title="http://localhost/UpdatingRecordProject/logout.php">
   LOGOUT
</a>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTERATION | PAGE</title>
  <style type="text/css">
    
 h2 {
  font-family:JetBrains Mono;
  font-weight: bolder;
  font-size: 25px;
  color: black;
  position: relative;
  top: 0px;
  left: 0px;
}


h1 {
  font-family:JetBrains Mono;
  color: white;
  position: absolute;
  text-transform:uppercase;
  top: -10px;
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
.h2text{

   color: floralwhite;
   text-align: center;
   padding-top: 10px;
   font-family: monospace;
   text-shadow: 4px 3px 3px black;
}



form {
  width: 800px;
  height: 500px;
  margin-left: 300px;
  background-color:black;
  margin-top: 35px;
  border-radius: 123px/10px;
  box-shadow: 0 0 15px 5px black ;
  border-left:2px solid green;
  border-right: 2px solid deeppink;

}

table {
  width: 800px;
  height: auto;
  padding-left: 50px;
  padding-top: 20px;
  background-color:transparent;
}

tr, td {
  font-family: 'Courier New', Courier, monospace;
  font-size: 15px;
  padding-top: 40px;
}

input[type="text"] {
  width: 300px;
  height: 30px;
  color: white;
  font-family: 'Courier New', Courier, monospace;
  background: none;
  padding-left: 40px;
  border: none;
  font-size: 15px;
  outline: none;
  border-bottom: 1px solid deeppink;
}

input[type="date"] {
  width: 300px;
  height: 30px;
  color: white;
  font-family: 'Courier New', Courier, monospace;
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
  color: deeppink;
  font-family: 'Courier New', Courier, monospace;
  background: none;
  padding-left: 40px;
  border: none;
  border-bottom: 1px solid hotpink;
  font-size: 15px;
  outline: none;
}

.wrap, .wrap1, .wrap2 {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  display: inline;
  position: relative;
  top: 250px;
  left: 280px;
}

.button {
  width: 140px;
  height: 45px;
  position: relative;
  top: -190px;
  left: -210px;
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.button1 {
  width: 140px;
  height: 45px;
  position: relative;
  top: -190px;
  left: -210px;
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color:whitesmoke;
  background-color: black;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.button2 {
  width: 140px;
  height: 45px;
  position: relative;
  top: -190px;
  left: -210px;
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: orange;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;

}

.button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
.button1:hover{
  background-color: #7e7604;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateX(7px);
}
.button2:hover{
  background-color: purple;
  box-shadow: 0px 15px 20px rgba(42, 29, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
    </style>

</head>

<body>
<div class="cover">
    <form action="" method="get">

        <h3 style="color: white; text-align: center;padding-top: 10px;font-family: JetBrains Mono;">REGISTRATION PAGE</h3>

        <table>
            <tr>
                <td><input type="text" name="fname" placeholder="Enter First Name" required="" autocomplete="off"> </td>
                <td><input type="text" name="lname" placeholder="Enter Last Name" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="date" name="birthday" placeholder="Birthday" required="" autocomplete="off"></td>
                <td><input type="text" name="gender" placeholder="Enter Gender" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Enter Email" required="" autocomplete="off"></td>
                <td><input type="text" name="mobileno" placeholder="Enter Mobile No" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" placeholder="Enter Subject" autocomplete="off"></td>
                <td><input type="password" name="password" placeholder="Enter Password" autocomplete="off" required=""></td>
            </tr>
        </table>
    <div class="wrap">
        <input type="submit" name="submit" class="button" value="INSERT" />
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="wrap1">
        <input type="reset" class="button1" name="reset" value="RESET" />
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="wrap2">
        <a href="http://localhost/UpdatingRecordProject/display.php" title="http://localhost/UpdatingRecordProject/display.php"><input type="button" class="button2" name="button" value="TABLE"></a>
    </div>
    </form>
</div>
  
</body>
</html>
    

 <?php

include 'connection.php';
error_reporting(0);
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
        $query = "INSERT INTO registerpage VALUES  ('$fname','$lname','$birthday','$gender','$email','$mobileno','$subject','$password' )";

        $data = mysqli_query($conn, $query);

        if ($data) {

            echo "<script>alert('Data inserted into Databse')</script>";

        }

    } else {
        echo "<script>alert('All Fields are Required')</script>";
    }

}

?>

