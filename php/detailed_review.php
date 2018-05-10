<?php 

session_start();
include("connection.php");
$text_review = $_GET["text_review"];
$rating = $_GET["qty"];
$pid = $_GET["pid"];
$uid = 	$_SESSION["uid"];

$sql = "INSERT INTO review (pid,uid,review,rating,visibility) VALUES ('$pid', '$uid','".$text_review."','$rating',0);";
if (mysqli_query($con, $sql)) {
    echo "successful";
    sleep(1);
    header("Location: .././main.html");
} else {
    echo "".mysqli_error($con);
}

// if(empty($email) || empty($myuser) || empty($mypass)){
// 	header("Location: .././login.html");
// 	die();
// }else{

// 	if (mysqli_query($con, $sql)) {
//     echo "successful";
// } else {
//     echo "".mysqli_error($con);
// }
// 	$_SESSION["email"] = $email;
// 	$_SESSION["myuser"]=$myuser;
// 	$_SESSION["mypass"]=$mypass;
	
// 	 // header("Location: .././main.html");
// }




?>