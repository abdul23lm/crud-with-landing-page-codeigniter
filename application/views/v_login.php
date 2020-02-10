<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter</title>
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/>By Abdul LM</h1>
	<form action="<?php echo base_url('application/controllers/login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
