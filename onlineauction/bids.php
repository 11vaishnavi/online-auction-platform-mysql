<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Auction</title>  
  </head>
  <body>
  <div class="bgimage">
  <div class="menu">
  <div class="leftmenu">
				<h4>OnlineAuction </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<a href="DisplayBid.php">
					<li id="firstlist"> BACK </li></a>
					<a href="index.html">
					<li> LOGOUT</li></a>
				</ul>
			</div>
  </div>
    <div class="center">
      <h1>Bid Items</h1>
      <form action="bid_details.php" method="post" enctype="multipart/form-data">
       
		<div class="txt_field">
          <input type="text" name="upload" required>
          <span></span>
          <label>Product Name</label>
        </div>        
		<input type="submit" value="Check">
		</div>
		</form>
	</div>
  </body>
</html>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.bgimage{
	/* background-image: url('auction.jpg'); */
	background-size: 100% 110%;
	background-color: white;		
	width: 100%;
	height: 150vh;
}
.menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.5);
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
	margin-left: 50%;
}

.rightmenu ul li {
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 20px;
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

body{
  margin: 0;
  padding: 0;
 /* background: linear-gradient(120deg,#2980b9, #8e44ad);*/
/*	bockground: #ff8c6b; */
  height: 150vh;
 /* overflow: hidden;*/
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
 background: white;
  border-radius: 100px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.75);
}
.center h1{
  text-align: center;
  padding: 50px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 50px;
  box-sizing:border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 20px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

</style>
