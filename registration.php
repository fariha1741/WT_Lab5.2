<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="RegistrationCheck.php">
		<table border ="1" width="60%" height="80%">
			<tr>
				<td align="left">Company </td>
				<td align="right"><br> <a href="Home.php">Home|</a> <a href="Home.php">Login|</a> <a href="Home.php">Registration</a></td>
			</tr>
	<tr>
		<td colspan="2"><fieldset align+"center">
			<legend>REGISTRATION</legend>
			<table border="0">
				<tr>
					<td>Name: </td>
					<td><input type="text" name="uname"  />
						<hr></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" /><hr></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" /><hr></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="confirmpassword" /><hr></td>
				</tr>
				
				<tr>
					<td><fieldset><legend>Gender</legend>
					
						<input type="radio" name="gender" value="Male"/> Male
						<input type="radio" name="gender" value="Female"/>Female
						<input type="radio" name="gender" value="Other"/>Other <hr>
					</td></fieldset>
				</tr>
				<tr>
					<td><fieldset><legend>Date of Birth</legend>
					
						<input type="date" name="date" value="Date"/> 
						 <hr>
					</td></fieldset>
				</tr>
				<td>
				<hr>
						<input type="submit" name="submit" value="Submit">
						<input type="" name="reset" value="Reset">
						
					</td>
				</table>
	</fieldset>
</td></tr>
<tr>
				<td align="center" colspan="2"> Copyright 2017</td>
			</tr>
		</table>
</form>

</body>
</html>>