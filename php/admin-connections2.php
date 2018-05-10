<?php
include("connection.php");
mysqli_select_db($con,"product_review");
$PID_val = $_GET['PID_val'];
$UID_val = $_GET['UID_val'];
$sql = "UPDATE review SET visibility = '1' WHERE PID='".$PID_val."' AND UID='".$UID_val."';";
$result1 = mysqli_query($con,$sql);
  
if (!$result1) {
	die('Invalid query');
}else{
  echo "successful;";
}


  
?>