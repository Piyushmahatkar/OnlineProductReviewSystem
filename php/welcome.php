<?php
// session_start();

if(!isset($_SESSION['myname']) || !isset($_SESSION['myuser'])|| !isset($_SESSION['mypass'])) {
  header("Location: .././login.html");
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Welcome.php</title>
	<link rel="stylesheet" type="text/css" href=".././css/Welcome.css">
</head>
<body>
<div id="container">
<div id="main">
	<h1>Welcome, <?php echo $_SESSION["myname"] ?></h1>
	<blockquote> username- <?php echo $_SESSION["myuser"]?></blockquote>
</div>
	
</div>

</body>
</html>