<?php 	
	include '../../config/koneksi.php';

	date_default_timezone_set('Asia/Jakarta');
	$nama_u=$_POST['nama_user'];
	$nama=$_POST['nama_barang'];
	$stts_p=$_POST['status_pinjam'];
	$date_p=date('y-m-d');
	$time_P=date('H:i');
	$stts_k=$_POST['status_kembali'];
	$date_k="";
	$time_k="";
	$jumlah=$_POST['Jumlah'];
	$ket=$_POST['keterangan'];

	$query="INSERT INTO tb_siswa VALUES ('','$nama_u','$nama','$stts_p','$date_p','$time_P','$stts_k','$date_k','$time_k','$jumlah','$ket')";
	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		# code...
		header('location:daftar_barang.php');

	}else{
		echo "gagal";
	}
 ?>