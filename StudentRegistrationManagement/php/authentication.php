<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication | Page</title>
</head>

<body>

</body>

</html>
<?php
include "conn.php";
error_reporting(0);
session_start();
if (!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit();
}
?>