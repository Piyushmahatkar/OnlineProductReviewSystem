<?php
include("connection.php");
mysqli_select_db($con,"product_review");
$sort = intval($_GET['sort']);
$page = intval($_GET['page']);
$sql0 = "SELECT * FROM product LIMIT ".$page." , 20;";
$sql1 = "SELECT * FROM review LIMIT ".$page." , 14;";
$sql2 = "SELECT * FROM user LIMIT ".$page." , 6;";

if($sort == "0"){
	$result1 = mysqli_query($con,$sql0);
  echo "<table>
        <tr>
        <th>Product ID</th>
        <th>Title</th>
        <th>Category</th>
        </tr>";

        while($row = mysqli_fetch_array($result1)) 
  {
          echo "<tr>";
          echo "<td>" .$row['PID']. "</td>";
          echo "<td>" .$row['title']. "</td>";
          echo "<td>" .$row['category']. "</td>";
          echo "</tr>";
          
      }

      echo "</table>";



} elseif($sort == "1"){
	$result1 = mysqli_query($con,$sql1);
echo "<table>
        <tr>
        <th>Product ID</th>
        <th>User ID</th>
        <th>Review</th>
        <th>Rating</th>
        <th>Visibility</th>
        </tr>";

        while($row = mysqli_fetch_array($result1)) 
  {
          echo "<tr>";
          echo "<td>" .$row['PID']. "</td>";
          echo "<td>" .$row['UID']. "</td>";
          echo "<td>" .$row['review']. "</td>";
          echo "<td>" .$row['rating']. "</td>";
          echo "<td>" .$row['visibility']. "</td>";
          echo "</tr>";
          
      }

      echo "</table>";


} else{
  $result1 = mysqli_query($con,$sql2);
  echo "<table>
        <tr>
        <th>User ID</th>
        <th>username</th>
        <th>Email</th>
        <th>Password</th>
        </tr>";

        while($row = mysqli_fetch_array($result1)) 
  {
          echo "<tr>";
          echo "<td>" .$row['UID']. "</td>";
          echo "<td>" .$row['username']. "</td>";
          echo "<td>" .$row['email']. "</td>";
          echo "<td>" .$row['password']. "</td>";
          echo "</tr>";
          
      }

      echo "</table>";
}
if (!$result1) {
	die('Invalid query');
}


  
?>