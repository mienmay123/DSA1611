<?php
	//after upload the data, continue connect to database
	$conn = mysqli_connect('localhost','root','','clothshop');
	
	if(!$conn)
	{
		die("<script>alert('Error in connection!');</script>");
	}
	
	$sql = "INSERT INTO login (username, password, role) VALUES ('$email','$pwd',1)";
	//execute the sql query
	if (!mysqli_query($conn, $sql))
	{
		die("<script>alert('Error in SQL query 1!');</script>");
	}
	
	//get the auto-generated uid from the system
	$sql="Select UID from login where username= '$email'";
	$result = mysqli_query($conn, $sql);//$result storing UID
	if(!$result) // if cannot the UID
	{
		die ("<script>alert('Error in SQL query 2!');window.history.go(-1);</script>");				
	}
	if($row = mysqli_fetch_array($result))
	{
		$uid = $row['UID'];
	}
	
	//once get the uid, continue add to customer table
	$sql = "Insert into customer (UID, FirstName, LastName, IC, Phone, Address, ".
	"Email, photolink)values ($uid,'$firstname','$lastname','$ic','$phone',".
	"'$address','$email','$newfilename')";
		
	//insert data to login
	if(!mysqli_query($conn, $sql))
	{
		$sql = "Delete from login where username = '$email'";
		mysqli_query($conn, $sql);
		$sql = "Delete from customer where email = '$email'";
		mysqli_query($conn, $sql);
		
		die ("<script>alert('Error in SQL query 3!');window.history.go(-1);</script>");				
	}
	include "sendingemail.php";
	//echo "<script>alert('Register Success!');window.location.href='login.php'</script>";
?>