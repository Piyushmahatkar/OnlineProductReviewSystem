<?php 

// session_start();
include("connection.php");
$email = $_GET["email"];
$myuser = $_GET["username"];
$mypass = $_GET["password"];

$sql = "INSERT INTO user (username, email, password) VALUES ('$myuser', '$email','$mypass');";

if(empty($email) || empty($myuser) || empty($mypass)){
	header("Location: .././login.html");
	die();
}else{

	if (mysqli_query($con, $sql)) {
    echo "successful";
} else {
    echo "".mysqli_error($con);
}
	// $_SESSION["email"] = $email;
	$_SESSION["username"]=$myuser;
	$_SESSION["mypass"]=$mypass;
	
	header("Location: .././main.html");
}




?>