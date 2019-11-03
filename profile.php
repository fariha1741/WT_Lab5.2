
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?php
  session_start();
  ?>
  
	<form method="POST" action="login.php"> 
		<table border ="1" width="60%" height="80%">
			<tr >
				<td align="left" >Company </td>
				<td align="right"><br> <a href="Home.php">bob|</a> <a href="Home.php">Logout</a> 
			</tr>
			<tr>
				<td>
					<b>Account</b>
			<hr>	
			
				<ul>
					<li>
						<a href = "dashboard.php">DashBoard</a>
					</li>
					<li><a href = "dashboard.php">View Profile</a></li>
					<li><a href = "dashboard.php">Edit profile</a></li>
					<li><a href = "dashboard.php">Change Profile Picture</a></li>
					<li><a href = "dashboard.php">Change Password</a></li>
					<li><a href = "dashboard.php">Logout</a></li>
				</ul>
			</td>
			<td>
				
  <p>Name : <?php echo ($_SESSION['name']); ?></p>
  
  <p>Email : <?php echo ($_SESSION['email']); ?></p>
  <p>Gender : <?php echo ($_SESSION['gender']); ?></p>
  <p>Date of Birth : <?php echo ($_SESSION['date']); ?></p>

  <a href="edit.php" style="color:MediumSeaGreen;"><b>Edit</b></a>

			 </td>
			</tr>

			
			<tr>
				<td align="center" colspan="2"> Copyright 2017</td>
			</tr>
		</table>
	</form>
</body>
</html>