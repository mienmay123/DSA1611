<?php
	$conn = mysqli_connect("localhost", "root", "", "clothshop");
	// Check connection
	if (!$conn) {
		die("<Script>alert('Connection failed!');window.location.href='login.php';</script>");
	}
	
	if(isset($_SESSION['user']))
	{
		$user = $_SESSION['user'];
	}
	else
	{
		echo "<Script>alert('No user available, please login again!');</script>";
		die("<script>window.location.href='login.php';</script>");
	}

	$sql = "Select * from customer where email = '$user'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)<=0)
	{
		echo "<script>alert('profile details not found!');</script>";
		die("<script>window.href.location='login.php'</script>");
	}


?>