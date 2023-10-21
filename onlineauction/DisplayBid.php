<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!---link rel="stylesheet" type="text/css" href="style.css"!-->
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
				<h4>OnlineAuction </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<a href = "Add_Products.html">
					<li id="firstlist">Add Item</li></a>
					<a href="Bid_Items.html">
					<li>Bid Item</li></a>
					<a href="bids.php">
					<li>Bid Details</li></a>
					<a href = "Feedback.html">
					<li>Feedback</li></a>	
					<a href="index.html">
					<li>LOGOUT</li></a>
				</ul>
			</div>
			<div id="groupSection">
					<table class="table">
						<thead  style="font-size:20px; background:lightgray; height:50px;width:100%">
							<tr style="text-align:auto;">
								<th>Product Id</th>
								
								<th>&nbsp &nbsp &nbsp &nbsp Category</th>
								<th>&nbsp &nbsp &nbsp &nbsp Product Name</th>
								<th>&nbsp &nbsp &nbsp &nbsp Minimum Bid</th>
								<th>&nbsp &nbsp &nbsp &nbsp Bid EndDate</th>
							</tr>
						</thead>
						<tbody style="font-size:20px; background:white; height:25px;width:100% ">


<?php
	$connect = mysqli_connect("localhost","root","","onlineauction");
							$sql="SELECT * FROM `items`";
							$result= $connect->query($sql);
							if(!$result)
							{
								die("Invalid Query...".$connect->error);
							}
							while($row = $result->fetch_assoc())
							{
								
								echo"<tr>
								<td>&nbsp &nbsp &nbsp &nbsp &nbsp " . $row["UIN"]."</td>
								
								<td>&nbsp &nbsp &nbsp &nbsp &nbsp " . $row["CATEGORY"]."</td>
								<td>&nbsp &nbsp &nbsp &nbsp &nbsp " . $row["PRODUCT_NAME"]."</td>
								<td>&nbsp &nbsp &nbsp &nbsp &nbsp " . $row["START_PRICE"]."</td>
								<td>&nbsp &nbsp &nbsp &nbsp &nbsp " . $row["END_DATE"]."</td>
								</tr>";
								 
							}
?>
<style>

*{
	margin:0px;
	padding:0px;
}



.menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.75);
}

.leftmenu{
	width: 20%;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}

.leftmenu h4{
	padding-left: 50px;
	font-weight: bold;
	color: white;
	font-size: 30px;
	font-family: 'Montserrat', sans-serif;
}

.rightmenu{
	width:70%;
	height: 100px;
	float: right;
/*	background-color: red; */
}

.rightmenu ul{
	margin-left: 200px;
}

.rightmenu ul li {
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 40px;
	text-transform: uppercase;

}

#firstlist{
	color: orange;
}

.rightmenu ul li:hover{
	color: orange;
}

#groupSection
		{
			  width:75%;
			  float: right;
			  background-color: white;
			  padding: 30px;
			}

		.table
		{
			background-color: lightgray;
			color: #fffff;
		}
.text{
	width: 100%;
	margin-top: 185px;
	text-transform: uppercase;
	text-align: center;
	color:black;
}

.text h4{

	font-size: 14px;
	font-family: 'Open Sans', sans-serif;
}

.text h1{
	font-size:62px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700px;
	margin:14px 0px;
}

.text h3{
	font-size: 12px;
	font-family: 'Open Sans', sans-serif;
}



</style>
		
</body>
</html>