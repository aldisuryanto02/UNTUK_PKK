<?php 
	include("../head_foot/header.php")
 ?>
 <style>
 	.luar{
 		margin-left: 50%;
 		padding-top: 8%; 
 	}
 	.luar .content{
 		height: 532px;
 	}
 	.content img{
 		width: 250px;
 		height: 250px;
 		padding: 10px 10px 20px 10px;
 	}
 	
 	.ket p{
 		font-size: 25px;
 		font-family: verdana;
 		padding-bottom: 10px;
 	}
 	.btn{
 		margin-top: 25px;
 		background-color: red;
 		width: 100px;
 		height: 35px;
 		border: none;
 		margin-left: 20px;
 		cursor: pointer;
 	}
 	.btn a{
 		text-decoration: none;
 		color: #fff;
 	}
 	.btn:hover{
 		background-color: pink;
 	}
 	.jarak{
 		height: 100px;
 	}

 </style>
<div class="luar">
 	<div class="content">
 		<img src="sarada.jpg">
 		<div class="ket">
 			<p>Nama Barang : Obeng</p>
 			<p>Jumlah Barang : 30</p>
 			<p>Kondisi Barang : Baik</p>
 			<p>Ruang : LAB TKJ</p>
 		</div>
  			<button class="btn"><a href="daftar_barang.php">Kembali</a></button>
 			<button type="submit" class="btn"><a href="pinjam_barang.php">Pinjam</a></button>
 			<div class="jarak"></div>

 	</div>
</div>

<?php 
	include("../head_foot/footer.php")
 ?>