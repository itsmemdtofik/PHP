<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<style type="text/css">
		
		table{
			background-color: rgba(0,0,0,.2);
			border:3px solid pink;
			font-family: arial black;
			margin-top:60px;

		}
		form{
		background-color: rgba(0,0,0,.5);
			border:3px solid white;
			width:900px;
			height:540px;
			margin-top:50px;
		}
		h4{
			background-color: orange;
			width:400px;
			height:30px;
			color:black;
			font-family: arial black;
		}
		b{
			color:cyan;
			font-family: arial black;
		}
		
		
	</style>
	
</head>
<body bgcolor="pink" text="white"><center><form>
	<?php

	$uname=$_POST["username"];
	$cash=$_POST["group1"];

	$price1=20;
	$price2=30;
	$price3=40;
	$price4=70;

	$item1=0;
	$item2=0;
	$item3=0;
	$item4=0;

	if(isset($_POST["option1"]))
		$item1=$_POST["val1"];

	if(isset($_POST["option2"]))
		$item2=$_POST["val2"];
	
	if(isset($_POST["option3"]))
		$item3=$_POST["val3"];
	
	if(isset($_POST["option4"]))
		$item4=$_POST["val4"];

	$total1=$price1*$item1;
	$total2=$price2*$item2;
	$total3=$price3*$item3;
	$total4=$price4*$item4;

	$total=($total1+$total2+$total3+$total4);
	$total5=$total+($total*13.5)/100;

	?>

	<?php
	print("<h4>Username:$uname</h4>");
	?>
	
	<h3>You have ordered following items  :-</h3>
	<table border=2>
		<tr>
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
		</tr>


		<tr> 

			<td><?php print("Four 100 watt light bulbs Rs.20");?></td>
	
		
			<td><?php print("$item1");?></td>
	

	
		<td><?php print("$price1");?></td>
	
	
		<td><?php print("$total1");?> </td>
</tr>



<tr> 
			<td>
				<?php print("Eight 100 watt light bulbs Rs.30");?>
			</td>
		
		
			<td><?php print("$item2");?>
		    </td>
	

	
		<td><?php print("$price2");?>
		</td>
	
	
		<td><?php print("$total2");?>
	    </td>
</tr>


<tr> 
			<td>
				<?php print("Four 100 watt life-long light bulbs Rs.40");?>
			</td>
		
		
			<td><?php print("$item3");?>
		    </td>
	

	
		   <td><?php print("$price3");?>
		   </td>
	
	
		   <td><?php print("$total3");?>
	       </td>
</tr>


<tr> 
			<td>
				<?php print("Eight 100 watt life-long light bulbs Rs.70");?>
			</td>

			<td><?php print("$item4");?>
		   </td>
	

	
		<td><?php print("$price4");?>
	   </td>
	
	
		<td><?php print("$total4");?>
	   </td>
</tr>
</table><br><br>

<?php print("<b>Total Cost   :   $total</b></br>");?>
<br>
<?php print("<b>Total bill(includeing VAT of 13.5%)   :  $total5</b>");?>

<br>

<?php print("<h4>Payment mode:$cash");?>

	
</form>
</center>
</body>
</html>