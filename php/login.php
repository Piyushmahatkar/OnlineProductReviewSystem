<?php 

session_start();
include("connection.php");

$myuser = $_GET["user"];
$mypass = $_GET["password"];

$sql = "SELECT password,UID FROM user WHERE username = '$myuser';";

if(empty($myuser) || empty($mypass)){
	header("Location: .././login.html");
	die();
}else{

	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($result);
	if($row[0] == $mypass){

	$_SESSION["uid"] = $row[1];
	$_SESSION["username"]=$myuser;
	$_SESSION["mypass"]=$mypass;
	

	}else{
		echo "".mysqli_error($con);
	}
	


//changed by saurabh
	if($myuser=="admin" && $mypass=="admin") 
	{
		$_SESSION["uid"] = 0;
		$_SESSION["username"]=$myuser;
		$_SESSION["mypass"]=$mypass;
		header("Location: ../php/admin.php");
	}

// change end- saurabh
	else
	{
		header("Location: .././main.html");
	}

}


?>