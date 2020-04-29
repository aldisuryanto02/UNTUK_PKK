<?php
	
	$conn = mysqli_connect("localhost","root","","db_inventaris2");

	if(!$conn){
		echo "Koneksi Gagal!";
		die();
	}

?>