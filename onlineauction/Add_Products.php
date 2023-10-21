<?php
	include("connection.php");
	
	
	$id=$_POST['id'];
	$name = $_POST['prodName'];
	$des = $_POST['prodDes'];
	$bid = $_POST['minBid'];
	$date = $_POST['bidEnd'];
	$ano = $_POST['ano'];
	$rno = $_POST['rno'];
	$type = $_POST['prodType'];
	
	
	
	$insert1= mysqli_query($conn, "INSERT INTO `items`( PRODUCT_NAME, DESCRIPTION , START_PRICE, END_DATE, CATEGORY) values ('$name', '$des',  '$bid', '$date', '$type')");
	$insert2=mysqli_query($conn,  "INSERT INTO `seller`(USER_ID,ACCOUNT_NUM,ROUTING_NUMBER) values ('$id','$ano','$rno')");
	$insert3=mysqli_query($conn,	  "INSERT INTO `places`(USER_ID,PRODUCT_NAME) values ('$id','$name')");
	if($insert1 and $insert2 and $insert3)
	{
		echo '<script>
				alert("Added Successfully");
				window.location="DisplayBid.php";
			</script>';
	}
?>