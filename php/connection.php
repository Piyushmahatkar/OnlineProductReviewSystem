<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_review";

$con=mysqli_connect($servername,$username,$password,$dbname); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
   	alert("connection died");
}
?>