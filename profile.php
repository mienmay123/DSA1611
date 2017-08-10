<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>My Profile</title>
</head>
<center>
	<h1>Profile :</h1>
	<body>
	<?php 
	session_start();
	include "profiledetails.php" 
	?>
		<table border="1" style="text-align:center">
			<tr>
				<th width="150px"><img src="<?php echo $_SESSION['Image']; ?>" width="200px" height="300px"/></th>
				<th width="500px">
				<table style="text-align:left"> 
						<tr>
						<th width="200px">User ID </th>
						<td>:</td>
						<td><?php echo $_SESSION['UID'];?></td>
					</tr>
					<tr>
						<th>Full Name </th>
						<td>:</td>
						<td><?php echo $_SESSION['FirstName'].$_SESSION['LastName'];?></td>
					</tr>
					<tr>
						<th>IC No </th>
						<td>:</td>
						<td><?php echo $_SESSION['IC']?></td>
					</tr>
					<tr>
						<th>Phone Number </th>
						<td>:</td>
						<td><?php echo $_SESSION['Phone']?></td>
					</tr>
					<tr>
						<th>Address </th>
						<td>:</td>
						<td><?php echo $_SESSION['Address']?></td>
					</tr>
					<tr>
						<th>Email </th>
						<td>:</td>
						<td><?php echo $_SESSION['Email']?></td>
					</tr>
					<tr>
						<th></th>
						<td></td>
						<td><br /><input name="gotonext" type="Button" value="Go to Next Page"/>
						<a href="logout.php"><input name="logout" type="Button" value="Logout"/></a>
						</td>
					</tr>																				
				</table>
				</th>
			</tr>
			
		</table>
		<?php
			//include "add.php";
		?>
	</body>
</center>
</html>
