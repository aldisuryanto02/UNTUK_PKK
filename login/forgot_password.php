<!DOCTYPE html>
<html>
<head>
	<title>forgotpassword</title>
	<style type="text/css">
		.forgot{
			border-radius: 20px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: white;
			color: black;
			padding: 20px;
			width: 270px;
			height: 200px;
			box-shadow: 0 0 10px 5px grey;
			opacity: 0.8;
		}	
		.forgot p{
			margin-top: 30px;
			font-size: 20px;
		}
		.forgot input{
			margin-top: 20px;
			width: 200px;
			height: 25px;
		}
		.btn-submit{
			margin-top: 25px;
			width: 100px;
			height: 35px;
			background: black;
			padding: 5px;
			border: 1px solid white;
			font-size: 15px;
			color: white;
			cursor: pointer;
			transition: 0.6s;
		}
		.btn-submit:hover{
			background: rgba(127 ,127, 127, 1);
			color: white;
		}
		.btn-submit2{
			margin-top: 25px;
			width: 100px;
			height: 35px;
			background: black;
			padding: 5px;
			border: 1px solid white;
			font-size: 15px;
			color: white;
			cursor: pointer;
			transition: 0.6s;
		}
		.btn-submit2:hover{
			background: rgba(127 ,127, 127, 1);
			color: white;
		}
	</style>
</head>
<body>
	<center>
	<form action="proses_forgot.php" method="post">
		<div class="forgot">
			<p>Silahkan Masukkan Email Anda</p>
			<input type="email" name="email" autocomplete="off">
			<a href="index.php"><button type="sumbit" class="btn-submit2">batal</button></a>
			<button type="sumbit" class="btn-submit">lanjut</button>
		</div>
	</form>
	</center>
</body>
</html>
