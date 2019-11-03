<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method="POST" action="login.php"> 
		<table border ="1" width="60%" height="80%">
			<tr >
				<td align="left">Company </td>
				<td align="right"><br> <a href="Home.php">Home|</a> <a href="Home.php">Login|</a> <a href="Home.php">Registration</a></td>
			</tr>
			<tr><td colspan="2">
	<fieldset>
			<legend>LOGIN</legend>
			<table border="0">
				<tr>
					<td>User Name: </td>
					<td><input type="text" name="uname"  /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" /><hr></td>
				</tr>
				<td><hr><input type="checkbox" name="remember"  />Remember Me</td>
				<tr>
				<td>
				
						<input type="submit" name="submit" value="Submit">
						<a href = "forgot.php"> forgot password?</a>
						
					</td></tr>
</table>
</fieldset></td></tr>
<tr>
				<td align="center" colspan="2"> Copyright 2017</td>
			</tr>>
		</table>
</form>
</body>
</html>