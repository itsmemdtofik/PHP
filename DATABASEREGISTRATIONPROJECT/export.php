
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EXCEL | PAGE</title>
	<style type="text/css">
		th{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>


<?php
session_start();
error_reporting(0);
require('connection.php');
$sql="select * from registerpage";
$res=mysqli_query($conn,$sql);
$html='<table><tr><th>FIRST NAME</th><th>LAST NAME</th><th>BIRTHDAY</th><th>GENDER</th><th>EMAIL</th><th>MOBILENO</th><th>SUBJECT</th><th>PASSWORD</th></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['birthday'].'</td><td>'.$row['gender'].'</td><td>'.$row['email'].'</td><td>'.$row['mobileno'].'</td><td>'.$row['subject'].'</td><td>'.$row['password'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>
	
</body>
</html>



 