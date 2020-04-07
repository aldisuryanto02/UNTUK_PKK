<?php 
	include '../../config/koneksi.php';

	$id = $_GET['id'];
	$nama=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah_barang'];
	$kondisi=$_POST['kondisi_barang'];
	$ruang=$_POST['ruang_barang'];


	$query="UPDATE tb_barang SET nama_barang='$nama',jumlah_barang='$jumlah',kondisi_barang='$kondisi',ruang_barang='$ruang' WHERE kode_barang=$id";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		# code...
		echo "berhasil";
	}else{
		echo "gagal";
	}
 ?>