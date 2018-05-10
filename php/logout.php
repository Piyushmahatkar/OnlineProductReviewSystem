<?php
session_start();
?>

<?php
echo "alert('session logout')";
session_unset(); 
session_destroy(); 
header("Location: .././main.html");
?>
