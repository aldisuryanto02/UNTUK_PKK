<?php 
	include '../../config/koneksi.php';

	$kode=$_POST['kode_ruang'];
	$nama=$_POST['nama_ruang'];

	$query="UPDATE SET kode_ruang='$kode',nama_ruang='$nama'";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		# code...
		echo "berhasil";
	}else{
		echo "gagal";
	}
 ?>