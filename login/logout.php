<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
</body>
</html>
<style>
	h2{
		margin-top: 20px;
		font-size: 30px;
	}
	.fa-check-circle{
		font-size: 80px;
		margin-top: 40px;
	}
	.fa-sign-in{
		font-size: 23px;
		color: black;
	}
	.fa-sign-in:hover{
		color: gray;
	}
	p{
		font-size: 20px;
	}

</style>
  	<script type="text/javascript">

		Swal.fire({
  			type: 'success',
  			title: 'Terimakasih <?php echo $_SESSION['username'];  ?>!',
  			text: 'Anda Telah Berhasil Logout',
  			footer: '<a href="index.php">Kembali Ke Beranda</a>'
			})
  	</script>