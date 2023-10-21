<?php
	include("connection.php");
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpassword=$_POST['cpassword'];

	
	if($cpassword!=$pass){
		echo '<script>
			alert("Passwords do not match!");
			window.location = "registration.html";
			</script>';
	}
	else{
		
		
			$insert= mysqli_query($conn, "insert into `members` (`USER_ID`,`NAME`,`EMAIL`,`PASSWORD`,`CPASSWORD`) values('$id','$name','$email','$pass','$cpassword')");
			
			if($insert){
				echo '<script>
						window.location = "index.html";
					</script>';
			}
		
		
	}
?>