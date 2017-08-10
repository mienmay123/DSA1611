<center>
<h1>Login page:</h1>
<form method="post" action="login.php">
	Username : <input name="Text1" type="text" /><br />
	Password : <input name="Text2" type="password" /><br />
	<input name="Submit1" type="submit" value="submit" />
</form>
<br />
Not a member yet? Click <a href="register.php">here</a> to register!
</center>

<?php
	session_start();
	if(isset($_POST['Submit1']))
	{
		$username = $_POST['Text1'];
		$password = $_POST['Text2'];
		
		$conn = mysqli_connect('localhost','root','','clothshop');
		$sql = "Select * from login where username = '$username'".
		" and password = '$password'";
		$result= mysqli_query($conn, $sql);
			
		if(mysqli_num_rows($result)>=1)
		{
			echo "<script>alert('Welcome back! $username');";
			echo "window.location.href='profile.php'</script>";
			$_SESSION['user'] = $username;
			$_SESSION['pwd'] = $password;
		}
		else
		{
			echo "<script>alert('Wrong username / password!')"; 
			echo "window.history.go(-1);</script>";
		}
	}	
?>