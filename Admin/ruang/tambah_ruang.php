<?php 
	include '../../config/koneksi.php';

	$kode=$_POST['kode_ruang'];
	$nama=$_POST['nama_ruang'];

	$query="INSERT INTO tb_ruang(kode_ruang,nama_ruang) VALUES ('$kode','$nama')";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		header("location:../ruang.php");
	}else{
		echo "gagal";
	}
 ?>