<?php 
	include("../head_foot/header.php")
 ?>
<style>
	.content{
		margin-left: 50%;
 		padding-top: 13%;
 		height: 462px;
	}
	.content img{
		height: 250px;
		width: 250px;
	}
	.ket{
		margin-top: 20px;
		margin-left: -10px;
		font-size: 25px;
	}
	.back{
		height: 30px;
		width: 100px;
		background-color: red;
		border: none;
		margin-top: 30px;
		margin-left: 75px;
	}
	.back a{
		text-decoration: none;
		color: white;
	}
	.back:hover{
		background-color: pink;
	}
</style>
 <div class="content">
 	<img src="../../asset/img/gambar2.jpg">
 	<div class="ket">
 		<p>Peminjaman Telah Berhasil</p>
 	</div>
 	<button class="back"><a href="daftar_barang.php">Kembali</a></button>
 </div>

 <?php 
 	include("../footer/footer.php")
  ?>