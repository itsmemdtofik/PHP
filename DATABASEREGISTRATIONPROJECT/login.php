<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | PAGE</title>
    <style type="text/css">
        form {
            background-color: rgba(0,0,0,.4);
            width: 500px;
            height: 600px;
            margin-left: 400px;
            margin-top: 20px;
            color: whitesmoke;
            text-align: center;
            padding-top: 10px;
            border-radius: 10px;
            border-bottom-color: 1px solid deeppink;
            border-bottom: 1px solid whitesmoke;
            border-top: 1px solid brown;
            box-shadow: 0 0 3px 3px white;


        }


        input[type="text"] {
            width: 300px;
            height: 30px;
            color: white;
            font-family: JetBrains Mono;
            background: none;
            padding-left: 40px;
            font-weight: bolder;
            border: none;
            margin-left:70px;
            border-bottom: 1px solid deeppink;
            font-size: 13px;
            outline: none;
        }
        input[type="date"] {
            width: 300px;
            height: 30px;
            color: black;
            font-family: JetBrains Mono;
            background: none;
            padding-left: 40px;
            border: none;
            margin-left:70px;
            border-bottom: 1px solid deeppink;
            font-size: 13px;
            outline: none;
        }

        input[type="password"] {
            width: 300px;
            height: 30px;
            color: whitesmoke;
            font-family: JetBrains Mono;
            font-weight: bolder;
            background: none;
            padding-left: 40px;
            border: none;
            border-bottom: 1px solid hotpink;
            font-size: 13px;
            outline: none;
            margin-left: 70px;
        }

        input[type="submit"] {
            width: 100px;
            height: 30px;
            color: white;
            font-family: JetBrains Mono;
            outline: none;
            font-size: 10px;
            border-radius: 50px;
            margin-left: 70px;
            background: transparent;
            cursor: pointer;
            outline: none;
            text-transform: uppercase;
            border:1px solid red;


        }
        input[type="submit"]:hover
        {
            transition: .4s ease;
            box-shadow: 0 0 2px white;
            transform: scale(1.2);
            outline: inherit;
            border:none;
            box-shadow: 0 0 3px 1px white;
            
        }

        input[type="reset"]:hover
        {
            transition: .4s ease;
            box-shadow: 0 0 2px whitesmoke;
            transform: scale(1.2);
            color:white;
            background: black;
        }

        input[type="reset"] {
            width: 100px;
            height: 30px;
            color: white;
            font-family: JetBrains Mono;
            background-color:transparent;
            font-size: 10px;
            border-radius: 50px;
            margin-left: 70px;
            outline: inherit;
            border:1px solid orange;
            cursor: pointer;
            text-transform: uppercase;
        }

        tr,
        td {
            margin: 0px;
            margin-left: 0px;
            padding-top: 70px;
            color: black;
            font-family: JetBrains Mono;
            font-weight: bolder;
            border: none;
            font-size: 20px;


        }
        h2{
            color:whitesmoke;
            background-color: blue;
            font-family: JetBrains Mono;
            font-size: 20px;
            font-weight: bold;
            width:200px;
        }

    </style>
</head>
<body background="image/1.jpg">
   <form name="" action="" method="post">
     <h2>LOGIN PAGE</h2>
     <table>
        <tr>

         <td><input type="text" name="uname" placeholder="Enter Name" autofill="off" /></td>
     </tr>
     <tr>

       <td><input type="password" name="pass" placeholder="Enter password" autocomplete="new-password" /></td>
   </tr>
   <tr>
       <td><input type="submit" name="submit" value="Submit" /></td>
   </tr>
   <tr>
    <td><input type="reset" name="reset" value="Reset" /></td>
</tr>
</table>

</form>
</body>
</html>

<?php


include "connection.php";
error_reporting(0);

if (isset($_POST['submit'])) {

    $user = $_POST['uname'];
    $pwd = $_POST['pass'];
    $query = "SELECT * FROM loginpage WHERE name='$user' && pass='$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if ($total == 1) {
        $_SESSION['user_name'] = $user;
        header('location:http://localhost/UpdatingRecordProject/registration.php');
    } else {
        echo "<script>alert('Username and Password did not match')</script>";
    }

}

?>
</body>

</html>
