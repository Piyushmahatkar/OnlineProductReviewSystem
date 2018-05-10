<!-- AJ <?php 
// session_start();
// $pid = $_GET["id"];
// echo $pid;
?> -->


<!-- CS -->
<?php
$pid = $_GET["id"];
$cookie_name = "pid";
$cookie_value = $pid;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// if(count($_COOKIE) > 0) {
//     echo "Cookies are enabled.";
// } else {
//     echo "Cookies are disabled.";
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Product Review</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	
	
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/review.css">
	
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/review.js"></script>
	
	
	
	
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
				<div>
					<div class="right_content">
						<a href="../php/check.php">Login/Logout</a>
					</div>
					<div class="right_content">
						<a href="../signup.html">SignUp</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header1_contents">
		<div class="below_head">
			<div class="img_source">
				<a href="../main.html"><img src="../img/oprs.jpg" width="55px" height="55px"></a>
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
<?php 


// if(!isset($_COOKIE[$cookie_name])) {
//     echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }

include("connection.php");
mysqli_select_db($con,"product_review");

$sql1= "SELECT review,rating,user.username,visibility FROM `review` JOIN user on review.uid=user.uid where pid=".$pid.";";
$result1=mysqli_query($con,$sql1);
$i=0;
$rev = array();
$rate = array();
$reviewer = array();
while($row = mysqli_fetch_row($result1))
{   
	
	if ($row[3]==0) {
	  $rev[]=$row[$i];
	  $rate[]=$row[$i+1];
	  $reviewer[]=$row[$i+2];
	}
 }


$sql3="SELECT title,category FROM `product`where pid=".$pid.";";
$result3=mysqli_query($con,$sql3);
$row3 = mysqli_fetch_row($result3);
$title=$row3[0];
$category=$row3[1];
$product_title = $title;
$title=str_replace(' ', '_', $title);
$category=str_replace(' ', '_', $category);

$sql2= "SELECT ROUND(AVG(rating),2) FROM `review` WHERE pid=".$pid.";";
$result2=mysqli_query($con,$sql2);

$row1 = mysqli_fetch_row($result2);
$avg=$row1[0];



?>
		<div id="below_head_review">
			<div class="image_review">
				<!-- <?php echo "../img/".$category."/".$title.".jpg" ?> -->
				<img src=<?php echo "../img/".$category."/".$title.".jpg" ?> width="350px" height="400px">
			</div>
			
			<div class="review_text">
				<div class="review_stats">
					<h3><?php echo $product_title;?> | Rating: <?php echo $avg ?>/5</h3>
				</div>

				<div class="review_updates">
					<table class="detailed_review_table">

						<?php
						$j=0;
						$avg=0;
						while($j<sizeof($rev))
						{
							$k=$j+1;
							echo"<tr><td>'".$rev[$j]."' - </td><td> ".$reviewer[$j]."</td><td> ".$rate[$j]."/5</td></tr>";
							$j++;

						}
						?>
					</table>
				</div>
					<a class="review_button_link" href="../detailed_review.php?idd=<?php echo $pid;?>&&tit=<?php echo $title;?>&&cat=<?php echo $category;?>"><input type="submit" value="Write a review"/></a>
			</div>
		</div>

		
</div>

</body>
</html>
