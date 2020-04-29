<?php 
	session_start();
	include("header/header.php")
 ?>
 <style>
 	.luar{
 		margin-left: 32%;
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
 	.jarak{
 		height: 100px;
 	}

.btn{
	margin-left: 75%;
	height: 30px;
	width: 100px;
	margin-bottom: 10px;
	background-color: black;
	color: white;
	border: none;
	cursor: pointer;
}
.btn:hover{
	background: rgba(127 ,127, 127, 1);
	color: white;
}

#popup {
	width: 100%;
	height: 1000px;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	z-index: 9999;
	visibility: hidden;
}
.window {
	width: 385px;
	height: 290px;
	left: 10%;
	top: -10%;
	background: #fff;
	border-radius: 10px;
	position: relative;
	padding: 10px;
	text-align: center;
	margin: 15% auto;
}

.window h2{
	margin-top: 20px;
}
.close-button {
	width: 7%;
	height: 5%;
	line-height: 23px;
	background: #000;
	border-radius: 50%;
	border: 3px solid #fff;
	display: block;
	text-align: center;
	color: #fff;
	text-decoration: none;
	position: absolute;
	top: -4px;
	right: -10px;	
}

/* Memunculkan Jendela Pop Up*/
#popup:target {
	visibility: visible;
}

.input{
  		height: 10px;
  		width: 100%;
  		margin-top: 5px;
  		padding: 10px;
  		margin-bottom: 20px;
} 
.kotak{
  		background : none;
  		width: 320px;
  		padding: 20px;
}

.edit{
	background-color: black;
	color: white;
	width: 70px;
	height: 30px;
	border: none;
	cursor: pointer;
	margin-left: 85%;
}



 </style>

<div class="luar">
	<a href="#popup"><button class="btn">Pinjam Barang</button></a>
	<div class="content">
		<img src="../../asset/img/gambar2.jpg">
		<img src="../../asset/img/gambar2.jpg">
		<img src="../../asset/img/gambar2.jpg">
		<img src="../../asset/img/gambar2.jpg">
		<img src="../../asset/img/gambar2.jpg">
		<img src="../../asset/img/gambar2.jpg">
		<div class="jarak"></div>
	</div>
</div>
<br><br>
<?php 
		
		include '../../config/koneksi.php';

 ?>
<div id="popup">
	<div class="window">
		<a href="#" class="close-button" title="Close">X</a>
		<h2>Pinjam Barang</h2>
		<form method="post" action="proses_tambah.php">
			<div class="kotak">
				<table>
					<tr>
						<td>Nama Barang</td>
						<td>
							<select name="nama_barang">
								<?php 
			 							$qur = "SELECT * FROM tb_barang";
			 							$has = mysqli_query($conn,$qur);
			 							while ($tam = mysqli_fetch_array($has)) {
			 							 
			 						 ?>
			 						<option><?php echo $tam['nama_barang'] ?></option>
			 					<?php } ?>
							</select>
						</td>
					</tr>

				<label style="margin-right: 280px;">Jumlah</label>
				<input class="input" type="text" name="Jumlah">
				<input type="hidden" name="nama_user" value="<?php echo $_SESSION['username']; ?>">
				<input type="hidden" name="status_pinjam" value="menunggu">
				<input type="hidden" name="status_kembali" value="belum dikembalikan">
				<input type="hidden" name="keterangan" value="meminjam">
				<input type="submit" class="edit" value="pinjam">
				</table>
			</div>
		</form>
	</div>
</div>
<?php 
 	include("../footer/footer.php")
  ?>