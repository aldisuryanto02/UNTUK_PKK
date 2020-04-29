<!DOCTYPE html>
<html>
<head>
	
	<title>register page</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
</head>
<body>
	<form action="proses_register.php" method="post">
	<div class="register">
		<h2>register Form</h2>
		<div class="box-register">
			<input type="number" name="nis" placeholder="nis" autocomplete="off">
		</div>
		<div class="box-register">
			<input type="email" name="email" placeholder="email" autocomplete="off">
		</div>
		<div class="box-register">
			<input type="text" name="username" placeholder="username" autocomplete="off">
		</div>
		<div class="box-register">
			<input type="password" name="password" placeholder="Password" autocomplete="off">
		</div>
			<input type="hidden" name="level" value="user">
		<br>
		<button type="sumbit" class="btn-register">
			daftar
		</button>
		<div class="bottom2">
			<p>sudah punya akun?</p><a href="login.php">login</a>	
		</div>
	</div>
	</form>
</body>
</html>