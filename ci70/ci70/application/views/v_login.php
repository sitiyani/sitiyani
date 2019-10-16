<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
<center>
<div id="container">
  <br>
  <h1>Login</h1>
  <div id="login-button">
  <img src="<?php echo base_url();?>assets/css/login.png">
  </img>
</div>
<br>
	<form action="<?php echo site_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td><input type="text" name="username" placeholder="Insert Username.."></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Insert Password.."></td>
			</tr>
			<tr>
				<td></td>
				<td>
			<input type="submit" value="Login" class="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>