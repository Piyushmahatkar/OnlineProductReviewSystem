<?php
include("connection.php");
mysqli_select_db($con,"product_review");
$title_val = $_GET['title_val'];
$category_val = $_GET['category_val'];
$sql = "INSERT INTO product (title, category) VALUES ('$title_val', '$category_val');";
$result1 = mysqli_query($con,$sql);
  
if (!$result1) {
	die('Invalid query');
}else{
  echo "successful;";
}


  
?>