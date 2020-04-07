<?php 
	include_once("../../config/koneksi.php");

	$id =$_GET['id'];

	$query= "DELETE FROM tb_barang WHERE kode_barang= '$id'";

	$hasil=mysqli_query($conn,$query);;

	if($hasil){
		header('location:../data_barang.php');
	}else{
		echo "hapus data gagal ";
	}
	
 ?>