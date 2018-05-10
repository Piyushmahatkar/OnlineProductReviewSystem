<?php
session_start();
?>
<html>
<head>
</head>
<body>
	

<?php

if(!isset($_SESSION["username"])){
	echo "<script>
window.location.href='.././login.html';
alert('press ok to continue login');
	</script>";
}
else{
	echo "<script>
window.location.href='logout.php';
alert('successfully logged off');
	</script>";

}
?>
</body>
</html>
