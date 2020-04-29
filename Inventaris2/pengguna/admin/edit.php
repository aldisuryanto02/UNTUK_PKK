<?php
include("../../config/koneksi.php");
// session_start();
$data= $_POST['id'];
$query = "SELECT * FROM tb_barang WHERE kode_barang='$data'";
$hasil = mysqli_query($conn, $query);
$data =(mysqli_fetch_assoc($hasil));
echo json_encode($data);
// $_SESSION['nama']=$data['nama_barang'];
// $_SESSION['kode']=$data['kode_barang'];
// $_SESSION['jumlah']=$data['jumlah_barang'];
// $_SESSION['kondisi']=$data['kondisi_barang'];
// $_SESSION['ruang']=$data['ruang_barang'];
?>