<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Session Using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        table {
            border: none;
            box-shadow: 3px 3px 5px black;
            position: absolute;
            width: 600px;
            top: 40px;
            left: 400px;
            background: linear-gradient(90deg, oldlace, white, oldlace);

        }

        th {
            padding: 20px;
            font-size: 30px;
            font-family: cursive;
            font-weight: bolder;
            color: deeppink;
            text-shadow: 2px 2px;
            text-transform: uppercase;
        }

        td {
            padding: 20px;
        }

        input[type="text"] {
            padding-left: 30px;
            height: 30px;



        }

        input[type="password"] {
            padding-left: 30px;
            height: 30px;

        }

        input[type="submit"] {
            text-align: center;
            height: 30px;
            background-color: orange;
            color: black;
            outline: inherit;
            width: 150px;
            height: 35px;
            font-family: sans-serif;
            font-size: 15px;
            font-weight: bold;
        }

        input[type="reset"] {
            text-align: center;
            height: 30px;
            background-color: black;
            color: white;
            outline: inherit;
            width: 150px;
            height: 35px;
            font-family: sans-serif;
            font-size: 15px;
            font-weight: bold;

        }

    </style>
    <script type="text/javascript">
        function fun1() {
            document.getElementById('text').style.border = "none";
            document.getElementById('text').style.outline = "inherit";
            document.getElementById('text').style.fontFamily = "sans-serif";
            document.getElementById('text').style.fontSize = "15px";
            document.getElementById('text').style.fontWeight = "bold";
            document.getElementById('text').style.borderBottom = "2px solid gray";
            document.getElementById('text').style.backgroundColor = "transparent";

        }

        function fun2() {
            document.getElementById('pass').style.border = "none";
            document.getElementById('pass').style.outline = "inherit";
            document.getElementById('pass').style.fontFamily = "sans-serif";
            document.getElementById('pass').style.fontSize = "15px";
            document.getElementById('pass').style.fontWeight = "bold";
            document.getElementById('pass').style.borderBottom = "2px solid gray";
            document.getElementById('pass').style.backgroundColor = "transparent";


        }

    </script>
</head>

<body>
    <form action="" method="post">
        <table align="center">
            <tr>
                <th colspan="2">Login Form</th>
            </tr>
            <tr>
                <td>
                    <h3>Username</h3>
                </td>
                <td><input type="text"  name="uname" onclick="fun1()" autocomplete="off" placeholder="Enter Username" id="text"></td>
            </tr>
            <tr>
                <td>
                    <h3>Password</h3>
                </td>
                <td><input type="password" onclick="fun2()" name="pass" autocomplete="off" placeholder="Enter password" id="pass" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
            </tr>

        </table>
    </form>



    <?php

session_start();
include "connection.php";
error_reporting(0);
if (isset($_POST['submit'])) {

    $user = $_POST['uname'];
    $pwd = $_POST['pass'];

    $query = "SELECT * FROM LOGIN_DEMO WHERE username='$user'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        $_SESSION['user_name'] = $user;
        header('location:http://localhost/session_php/welcome_page.php');
    } else {
        echo "<script>alert('Username and Password did not match')</script>";
    }
}

?>
</body>

</html>
