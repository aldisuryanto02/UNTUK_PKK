<!DOCTYPE html>
<html>
<head>
	
	<title>reset page</title>
	<style type="text/css">
		
		.ubah {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: white;
			color: black;
			padding: 20px;
			width: 270px;
			height: 300px;
			box-shadow: 0 0 10px 5px grey;
			opacity: 0.8;
		}

		.ubah h2 {
			text-align: center;
			color: black;
			padding-top: 10px;
			padding-bottom: 10px;
			letter-spacing: 5px;
		}

		.box-ubah {
			display: flex;
			justify-content: space-between;
			margin-bottom: 15px;
			border-bottom: 2px solid black;
			padding: 8px 0;

		}

		.box-ubah input {
			width: 100%;
			margin-top: 5px;
			padding: 0 10px;
			background: none;
			border: none;
			outline: none;
			color: black;
			font-size: 18px;
		}

		.box-ubah input::placeholder {
			color: black;
		}

		.btn-ubah {
			margin-top: 10px;
			width: 100%;
			background: black;
			padding: 10px;
			border: 1px solid white;
			font-size: 18px;
			letter-spacing: 5px;
			color: white;
			cursor: pointer;
			transition: 0.6s;
		}
		.ubah a{
			margin-left: 160px;
		}
		.btn-ubah:hover {
			background: rgba(127 ,127, 127, 1);
			color: white;

		}
	</style>
</head>
<body>
	<form action="proses_ubah.php" method="post">
	<div class="ubah">
		<h2>Ubah password Form</h2>
		<div class="box-ubah">
			<input type="password" id="pw1" name="newpass" placeholder="new password" autocomplete="off">
		</div>
		<div class="box-ubah">
			<input type="password" id="pw2" name="confirmpass" placeholder="confirm password" autocomplete="off">
		</div>
		<br>
		<button type="sumbit" class="btn-ubah">
			ubah
		</button>
	</div>
	</form>
  </div>
</body>
</html>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>