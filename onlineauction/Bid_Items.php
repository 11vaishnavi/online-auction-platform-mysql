<?php
	include("connection.php");
	
	$id=$_POST['id'];
	$prodName=$_POST['prodName'];
	$bpr=$_POST['bpr'];
	$dt=$_POST['dt'];
	$spr=$_POST['spr'];
	
	
		$insert1= mysqli_query($conn, "insert into `bids` (`PRODUCT_NAME`,`USER_ID`,`BIDDING_PRICE`,`BIDDING_DATE`) values ('$prodName','$id','$bpr','$dt')");
		$insert2= mysqli_query($conn, "insert into `buyer` (`USER_ID`,`SHIPPING_ADDRESS`) values ('$id','$spr')");
		if($insert1 and $insert2){
            echo '<script>
					alert("Your Bid placed!");
                    window.location = "DisplayBid.php";
                </script>';
		
        }
?>