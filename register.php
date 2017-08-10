	<center>
		<h1>Registration Page</h1>
		<br />
		<form method="post" action="checkreg.php" enctype="multipart/form-data" >
			<table>
				<tr>
					<td width="200px">First name </td>
					<td width="50px"> : </td>
					<td width="200px"><input name="Text1" type="text" required="required"/></td>
				</tr>
				<tr>
					<td>Last name </td>
					<td> : </td>
					<td><input name="Text2" type="text" required="required"/></td>
				</tr>
				<tr>
					<td>IC No </td>
					<td> : </td>
					<td><input name="Text3" type="text" required="required"/></td>
				</tr>
				<tr>
					<td>Contact Number </td>
					<td> : </td>
					<td><input name="Text7" type="text" required="required"/></td>
				</tr>				
				<tr>
					<td>Address </td>
					<td> : </td>
					<td><textarea name="TextArea1" cols="20" rows="2" required></textarea></td>
				</tr>				
				<tr>
					<td>Email </td>
					<td> : </td>
					<td><input name="Text4" type="text" required="required"/></td>
				</tr>
				<tr>
					<td>Password </td>
					<td> : </td>
					<td><input name="Text5" type="password" required="required"/></td>
				</tr>
				<tr>
					<td>Confirm Password </td>
					<td> : </td>
					<td><input name="Text6" type="password" required="required"/></td>
				</tr>
				<tr>
					<td>Profile Picture </td>
					<td> : </td>
					<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
				</tr>												
			</table> 
			<br />
			<input name="Submit1" type="submit" value="Register" />
		</form>
	</center>
