<?php 
	session_start();
	include("header/header.php");
	include '../../config/koneksi.php';
	$query="SELECT * FROM tb_siswa WHERE nama_user='".$_SESSION['username']."' AND keterangan='meminjam'";
	$hasil=mysqli_query($conn,$query);
 ?>
<style>
	.content{
		margin-left: 26%;
 		padding-top: 8%;
 		height: 531px;
	}
	.content h2{
		text-align: center;
		margin-bottom: 30px;
	}
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
	height: 490px;
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
	top: -10px;
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

#popup2 {
	width: 100%;
	height: 1000px;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	z-index: 9999;
	visibility: hidden;
}
.window2 {
	width: 385px;
	height: 490px;
	left: 10%;
	top: -10%;
	background: #fff;
	border-radius: 10px;
	position: relative;
	padding: 10px;
	text-align: center;
	margin: 15% auto;
}

.window2 h2{
	margin-top: 20px;
}
.close-button2 {
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
	top: -10px;
	right: -10px;	
}

/* Memunculkan Jendela Pop Up*/
#popup2:target {
	visibility: visible;
}
.btn{
	margin-left: -28px;
}
</style>
<link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.min.css">

<div class="content">
	<h2>Daftar Barang yang Dipinjam</h2>
	<br>
 <div class="table-responsive">
 <table class='table table-striped content2'>
 	<tr>
 		<th>No</th>
 		<th>Nama Barang</th>
 		<th>Status</th>
 		<th>Tanggal Peminjaman</th>
 		<th>Pukul</th>
 		<th>jumlah</th>
 		<th>Aksi</th>
 	</tr>
 	<?php
 	 while ($data=mysqli_fetch_array($hasil)) {

 	 ?>
 	 <tr>
 		<td><?php echo $data['id'] ?></td>
 		<td><?php echo $data['nama_barang'] ?></td>
 		<td><?php echo $data['status_pinjam'] ?></td>
 		<td><?php echo $data['tanggal_pinjam'] ?></td>
 		<td><?php echo $data['waktu_pinjam'] ?></td>
 		<td><?php echo $data['jumlah'] ?></td>
 		<form>	
 		 		<input type="hidden" name="keterangan" value="kembali">
 		<td><button type='button' class='btn btn-warning' onclick="window.location.href='./proses_ubah.php?id=<?php echo $data['id'] ?>';">kembalikan</button>&nbsp;</td>
 		</form>

 	</tr>
 	<?php } ?>
 </table>
</div>
 
</div>
<br><br>
<?php 
	include("../footer/footer.php")
 ?>