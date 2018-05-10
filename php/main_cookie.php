<?php

include("connection.php");
mysqli_select_db($con,"product_review");
$pid=$_COOKIE["pid"];

setcookie("pid", "", time() - 3600);
$sql1= "SELECT title,category FROM product WHERE pid =".$pid.";";
$result1=mysqli_query($con,$sql1);
$data1 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data1[] = $row[0];
   $data1[] = $row[1];
}
$data1[]=$pid;
// $data1=(string) $pid
echo json_encode($data1);

?>