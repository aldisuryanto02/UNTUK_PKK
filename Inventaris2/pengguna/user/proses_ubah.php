<?php 	
	include '../../config/koneksi.php';

	date_default_timezone_set('Asia/Jakarta');
	$id=$_GET['id'];
	$stts_k=$_POST['status_kembali'];	
	$date_k=date('y-m-d');
	$time_k=date('H:i');
	$ket="kembali";

	$query="UPDATE tb_siswa SET status_kembali='menunggu',tanggal_kembali='$date_k',waktu_kembali='$time_k',keterangan='$ket' WHERE id='$id'";
	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		# code...
		header('location:barang_pinjam.php');

	}else{
		echo "gagal";
	}
 ?>