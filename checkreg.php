<?php
	if(isset($_POST['Submit1']))
	{
		//to get the data from previous page
		$firstname = $_POST['Text1'];
		$lastname = $_POST['Text2'];
		$ic = $_POST['Text3'];
		$email = $_POST['Text4'];
		$pwd = $_POST['Text5'];
		$confirmpwd = $_POST['Text6'];
		$phone = $_POST['Text7'];
		$address = $_POST['TextArea1'];
		
		//read the file name
		$filename = basename($_FILES["fileToUpload"]["name"]);
			
		if($pwd !== $confirmpwd)
		{
			echo "<script>alert('Password not match!Please try again');";
			echo "window.history.go(-1);</script>";
		}
		
		//move the file to server
		$getFileType = pathinfo($filename,PATHINFO_EXTENSION);
		$newfilename = "profilepic/".$ic.".".$getFileType;
		$checkfilesize = $_FILES["fileToUpload"]["size"];
		
		//check for file size so not too big
		if($checkfilesize > 500000) //500Mb
		{
			echo "<script>alert('Picture too big');";
			echo "window.history.go(-1);</script>";			
		}
		//check for the picture type correct or not
		if($getFileType != "jpg" && $getFileType != "png" && $getFileType != "gif" ) 
		{
			echo "<script>alert('Picture not recognize! Please try again');";
			echo "window.history.go(-1);</script>";	
		}
		
		//everything ok.. then upload the profile picture to the server
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newfilename) )
		{
        	echo "<script>alert('Picture uploaded to the server!');</script>";
    	} 
    	else {
        	echo "<script>alert('can't upload the photo. Please try again!');";
			echo "window.history.go(-1);</script>";
    	}
    			
		include "addtodatabase.php";
		
	}
?>