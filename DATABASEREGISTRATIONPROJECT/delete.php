<?php
session_start();
include("connection.php");
error_reporting(0);
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{
    
}

    $query = "SELECT * FROM loginpage WHERE name='$userprofile'";
    $data = mysqli_query($conn,$query); 
    $result=mysqli_fetch_assoc($data);
    echo "<h2>Welcome</h2>"."<h1>".$result['name']."</h1>";
  

$fname=$_GET['fname'];
$query = "DELETE FROM registerpage WHERE FIRSTNAME='$fname'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record has been deleted')</script>";
	?>

	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/UpdatingRecordProject/display.php">


	<?php

}
else

{
	echo "<script>alert('Record has not been deleted')</script>";
}




?>
