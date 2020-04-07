<?php 
	include '../../config/koneksi.php';

	$kode=$_POST['kode_barang'];
	$nama=$_POST['nama_barang'];
	$jumlah=$_POST['jumlah_barang'];
	$kondisi=$_POST['kondisi_barang'];
	$ruang=$_POST['ruang_barang'];

	$query= "INSERT INTO tb_barang(kode_barang,nama_barang,jumlah_barang,kondisi_barang,ruang_barang) VALUES ('$kode','$nama','$jumlah','$kondisi','$ruang')";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
	 header("location:../data_barang.php");
	}else{
		echo "gagal";
	}
 ?>