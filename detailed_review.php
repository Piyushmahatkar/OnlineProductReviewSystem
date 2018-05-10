<?php
include("php/connection.php");
include("php/header1.php");
// require "header1.php";
$pid = $_GET["idd"];
$title12 = $_GET["tit"];
$category = $_GET["cat"];
mysqli_select_db($con,"product_review");

$data = array();

$sql1= "SELECT title FROM product WHERE PID= '$pid';";
$result1=mysqli_query($con,$sql1);
$row = mysqli_fetch_row($result1);
$title = $row[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Product Review</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/review.css">

	<link rel="stylesheet" type="text/css" href="css/detailed_review.css">


	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="wrapper">
<!-- This is outer container -->
	
		<div class="header">
		<!-- header section -->
			<div class="header_top">

				<div class="left_content">
					<div>
						<span><a>Online Product Review System</a></span>
						<span><a>WPL Project</a></span>
						<span><a>Find us on facebook</a></span>
					</div>
				</div>
				<div class="login_activity">
					<div id="right_content_login">
						<a href="./php/check.php">Login/Logout</a>
						<a href="signup.html">SignUp</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header1_contents">
		
		<div class="below_head">
			<div class="img_source">
				<a href="main.html"><img src="img/oprs.jpg" width="55px" height="55px"></a>
			</div>
			<div class="shop_content">
				<div class="items_table">
					<ul id="horizontal_li">
						<li class="electronics">Electronics</li>
						<li class="men">Men</li>
						<li class="women">Women</li>
						<li class="homefurniture">Home and Furniture</li>
						<li class="sports">Sports</li>
						<li class="books">Books</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="detailed_list">
			<div class="container">
			  <div class="row">
			    <table class="electronics_data col-lg-2"></table>
			    <table class="men_data col-lg-2"></table>
			    <table class="women_data col-lg-2"></table>
			    <table class="homefurniture_data col-lg-2"></table>
			    <table class="sports_data col-lg-2"></table>
			    <table class="book_data col-lg-2"></table>
			  </div>
			</div>
		</div>
		
		</div>

		<div id="below_head_review">
			<div class="image_review">
				<img src=<?php echo "img/".$category."/".$title12.".jpg" ?> width="350px" height="400px">
			</div>
			
			<div class="review_text">
			
				<div id="review_product_title">
					<h2><?php echo $title?></h2>
				</div>

				<div class="star_rating">

				</div>

				<div class="review_textarea">

					<form method="get">

						<div class="box">    
					        <label for="qty"><abbr title="Quantity">Give A Rating</abbr></label>
					        <input class="counter_input" id="qty" name="qty" value="0" />

					        <button class="counter_update" id="down" type="button" onclick="modify_qty(-1)">-1</button>
					        <button class="counter_update" id="up" type="button" onclick="modify_qty(1)">+1</button>
				    	</div>
				    	<input id="pid" name="pid" value="<?php echo $pid;?>">
					  <textarea name="text_review" placeholder="Write a review"></textarea>
					  <input type="submit" formaction="php/detailed_review.php" value="Submit"/>
					</form>

					


				</div>
			</div>
			
		</div>

		
</div>
		

</body>
</html>