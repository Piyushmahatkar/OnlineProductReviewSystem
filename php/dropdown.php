<?php
include("connection.php");
mysqli_select_db($con,"product_review");

$data = array();

$sql1= "SELECT pid,title FROM product WHERE category= 'electronics';";
$result1=mysqli_query($con,$sql1);
$data1 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data1[] = $row[1];
   $data1[] = $row[0];
}

$sql1= "SELECT pid,title FROM product WHERE category= 'mens';";
$result1=mysqli_query($con,$sql1);
$data2 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data2[] = $row[1];
   $data2[] = $row[0];
}

$sql1= "SELECT pid,title FROM product WHERE category= 'womens';";
$result1=mysqli_query($con,$sql1);
$data3 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data3[] = $row[1];
   $data3[] = $row[0];
}

$sql1= "SELECT pid,title FROM product WHERE category= 'home furniture';";
$result1=mysqli_query($con,$sql1);
$data4 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data4[] = $row[1];
   $data4[] = $row[0];
}

$sql1= "SELECT pid,title FROM product WHERE category= 'sports';";
$result1=mysqli_query($con,$sql1);
$data5 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data5[] = $row[1];
   $data5[] = $row[0];
}

$sql1= "SELECT pid,title FROM product WHERE category= 'books';";
$result1=mysqli_query($con,$sql1);
$data6 = array();
while($row = mysqli_fetch_row($result1))
{   
   $data6[] = $row[1];
   $data6[] = $row[0];
}
$data[] = $data1;
$data[]= $data2;
$data[] = $data3;
$data[]= $data4;
$data[] = $data5;
$data[]= $data6;

echo json_encode($data);
// echo "<table>
// <tr>
// <td align=center> <b>Roll No</b></td>
// </tr>";

// while($data = mysqli_fetch_row($result))
// {   
//     echo "<tr>";
//     echo "<td align=center>$data[0]</td>";
//     echo "</tr>";
// }
// echo "</table>";
?>