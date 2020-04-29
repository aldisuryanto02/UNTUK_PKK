<!DOCTYPE html>
<html>
<head>
	
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
</head>
<body>
	<form action="proses_login.php" method="post">
	<div class="login">
		<h2>Login Form</h2>
		<div class="box-login">
			<input type="text" name="username" placeholder="username" autocomplete="off">
		</div>
		<div class="box-login">
			<input type="password" name="password" placeholder="Password" autocomplete="off">
		</div>
		<a href="forgot_password.php">Forgot Password</a>
		<br>
		<button type="sumbit" class="btn-login">
			login
		</button>
		<div class="bottom">
			<p>tidak punya akun?</p><a href="register.php">Register</a>
			
		</div>
	</div>
	</form>
  </div>
</body>
</html>