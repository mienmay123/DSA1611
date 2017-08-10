<?php
		//after trnasfer picture to server, continue to insert data to database
		$conn = mysqli_connect('localhost','root','','clothshop');
		$sql = "Insert into login (username, password, role) values ('$email','$pwd',1)";
		
		//insert data to login
		if(!mysqli_query($conn, $sql))
		{
			die("<script>alert('Register Fail! Please try again!');</script>");				
		}
		
		//get the generated uid from the system
		$sql="Select UID from login where username= '$email'";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			die ("<script>alert('Register Fail (ID)! Please try again!');window.history.go(-1);</script>");				
		}
		
		if($row = mysqli_fetch_array($result))
		{
			$uid = $row['UID'];
		}
		
		//once get the uid, continue add to customer table
		$sql = "Insert into customer (UID, FirstName, LastName, IC, Phone, Address, Email, photolink)values ('$uid','$firstname','$lastname','$ic','$phone','$address','$email','$newfilename')";
		
		//insert data to login
		if(!mysqli_query($conn, $sql))
		{
			$sql = "Delete from login where username = '$email'";
			mysqli_query($conn, $sql);
			$sql = "Delete from customer where email = '$email'";
			mysqli_query($conn, $sql);
		
			die ("<script>alert('Register Fail(III)! Please try again!');window.history.go(-1);</script>");				
		}
		else
		{	
		//include "sendemail.php";
		}
?>