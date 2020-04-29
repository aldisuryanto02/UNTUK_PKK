<?php 
include '../config/koneksi.php';	
	if (isset($_POST['submit'])) {
		 define('ROOT', 'http://localhost/inventaris/pengguna/input_code.php');

		$to = $_POST['email'];
		$judul=$_POST['Aktivasi akun anda'];
		$dari="from: aldisuryanto@wweb.com \n";
		$dari="content-type: text/html \r\n";

		$pesan .="a href='".ROOT."forgot_password.php?email=".$_POST['email'];

		$kirim= mail($to, $judul, $pesan, $dari);

		if ($kirim) {
			echo "berhasil";
		}else{
			echo "gagal";
		}
	}
 ?>