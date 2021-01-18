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
    echo "<h2>Welcome</h2>"."<h1>".$result['name']."</h1>";
   

?>
<a href="http://localhost/UpdatingRecordProject/logout.php" style="font-family: JetBrains Mono;font-size:15px;
color:blue;font-weight: bold;" >
    LOGOUT
</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SEARCHING | RECORDS | PAGE</title>
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
            color: deeppink;
            position: relative;
            top: 0px;
            left: 0px;
        }

       

        table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 99%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: floralwhite;

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
            background-color: blue;
            color: white;
            font-family: JetBrains Mono;
            font-weight: 10px;
        }

        form {
            margin-left: 360px;
        }

        input[type="search"] {
            width: 300px;
            height: 50px;
            background-color: transparent;
            color: black;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bolder;
            padding-left: 30px;
            border-radius: 100px;
            border: none;
            outline: inherit;



        }

        input[type="submit"] {
            width: 70px;
            height: 50px;
            background-color: black;
            color: white;
            font-family: JetBrains Mono;
            font-size: 20px;
            font-weight: bolder;
            border-radius: 50px;
            outline: none;
            cursor: pointer;
            border: none;

        }
        input[type="submit"]:active{
            border: none;
            background-color: black;
            outline: none;
            outline-style: dotted; 
            color: whitesmoke;
            box-shadow: 0 0 10px 10px brown inset;
        }

        .searching_page {
            width: 380px;
            height: 60px;
            position: relative;
            top: 20px;
            left: 200px;
            border: 1px solid blue;
            outline: inherit;
            background-color: transparent;
            font-family: sans-serif;
            font-size: 20px;
            font-weight: bolder;
            border-radius: 100px;
            padding-top: 5px;
            padding-left: 10px;
            filter: contrast(200%);
            filter: drop-shadow(5px 5px 5px black)


        }

    </style>
</head>

<body bgcolor="whitesmoke">

    <form name="" action="http://localhost/UpdatingRecordProject/searching.php" method="get">
        <div class="searching_page">
            <input type="search" name="aaa" autocomplete="off" placeholder="Search" />
            <input type="submit" value="OK" name="submit" />
        </div>
    </form><br><br>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>E-mail</th>
            <th>Mobile No</th>
            <th>Subject</th>
            <th>Password</th>
        </tr>

        <?php
        if(isset($_GET['submit']))
        {

            $first_name = $_GET['aaa'];
            $query = "SELECT * FROM registerpage WHERE firstname ='$first_name'";
            $data = mysqli_query($conn,$query);
            while($result=mysqli_fetch_assoc($data))
            { 
               
                ?>
        <tr>
            <td><?php echo $result['firstname']; ?></td>
            <td><?php echo $result['lastname']; ?></td>
            <td><?php echo $result['birthday']; ?></td>
            <td><?php echo $result['gender']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['mobileno']; ?></td>
            <td><?php echo $result['subject']; ?></td>
            <td><?php echo $result['password']; ?></td>
        </tr>

        <?php


            }

        }
    ?>


    </table>


</body>

</html>
