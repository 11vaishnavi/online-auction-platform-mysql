<?php
$username="root";
$passwor="";
$server="localhost";
$db="onlineauction";

$conn=mysqli_connect($server,$username,$passwor,$db);

if($conn){
	echo'<script>
		alert("Connection Successful");
	</script>';
}
 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
?>