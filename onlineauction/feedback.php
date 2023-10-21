
<?php
	include("connection.php");
	
	
	$id=$_POST['id'];
	$prodName=$_POST['prodName']
	$rat=$_POST['rat'];
	$com=$_POST['com'];
	
	
		$insert1= mysqli_query($conn, "insert into `feedback` (`USER_ID`,`PRODUCT_NAME`,`RATING`,`COMMENT`) values ('$id','$prodName','$rat','$com')");
		if($insert1){
            echo '<script>
					alert("Feedback Added Successfully");
                    window.location = "DisplayBid.php";
                </script>';
		
        }
?>