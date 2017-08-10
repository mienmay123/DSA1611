<?php
	session_start();
	session_destroy();
	echo "<script>alert('Logout Successfully. Thank you!');";
	echo "window.location.href='login.php';</script>";
?>
