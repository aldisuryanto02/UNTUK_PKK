<?php 
	include("header/header.php")
 ?>

 <style>
 	.number{
 		margin-left: 50%;
 		padding-top: 20%; 
 		height: 367px;
 	}
 	.number p{
 		margin-bottom: 30px;
 		font-size: 25px;
 		margin-left: -10px;
 	}
 	.number input{
 		height: 40px;
 		width: 50%;
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
 	.btn2{
 		margin-top: 10px;
 		margin-left: 40px;
 	}
 	.btn a{
 		text-decoration: none;
 		color: #fff;
 	}
 	.btn:hover{
 		background-color: pink;
 	}
 	
 </style>

 <div class="number">
 	<p>Jumlah Barang yang Akan Dipinjam</p>
 	<input type="number" name="number">

 	<div class="btn2">
 		<button class="btn"><a href="detail_barang.php">Kembali</a></button>
 		<button class="btn"><a href="sukses_pinjam.php">Pinjam</a></button>
 		<div class="jarak"></div>
 </div>
 </div>

<?php 
	include("../footer/footer.php")
 ?>