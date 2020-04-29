<?php 
	include '../../../config/koneksi.php';
	$data = $_POST['kode_ruang'];
	$nama = $_POST['nama_ruang'];

	$query="UPDATE tb_ruang SET nama_ruang='$nama' WHERE kode_ruang='$data'";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		# code...
		header("location:../ruang.php");
	}else{
		echo "gagal";
	}
 ?>