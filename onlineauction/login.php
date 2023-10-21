<?php
    session_start();
    include("connection.php");
	$id=$_POST['id'];
    $pass = $_POST['pass'];
	
    $check = mysqli_query($conn, "select * from members where USER_ID='$id' and PASSWORD='$pass' ");

    if(mysqli_num_rows($check)>0)
	{
        echo '<script>
				alert("Login Successful");
                window.location = "DisplayBid.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "index.html";
            </script>';
    }
    
?>
