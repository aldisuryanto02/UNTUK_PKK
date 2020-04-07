<?php 
	include("../head_foot_adm/header.php");
	include ("../config/koneksi.php");
	$query="SELECT * FROM tb_barang";
	$hasil=mysqli_query($conn,$query);

	 ?>
<style>
	.content{
		margin-left: 32%;
 		padding-top: 8%;
 		height: 531px;
	}
	.content h2{
		margin-bottom: 50px;
	}

	.btn{
		margin-left: 75%;
		height: 30px;
		width: 100px;
		margin-bottom: 10px;
		background-color: red;
		border: none;
		cursor: pointer;
	}
	.btn:hover{
		background-color: pink;
	}

	table{
 		border: 5px solid red;
 	}
 	th{
 		background-color: red;
 		text-align: center;
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
	background-color: red;
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

</style>
<div class="content">
	<h2>Data Barang</h2>
	<a href="#popup"><button class="btn">Tambah</button></a>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>kode_barang</th>
 		<th>Nama Barang</th>
 		<th>Jumlah</th>
 		<th>Kondisi</th>
 		<th>Ruang</th>
 		<th colspan="2">Aksi</th>
 	</tr>
 	<?php 
 		while ($data= mysqli_fetch_array($hasil)) {
 	 ?>
 	<tr>
 		<td><?php echo $data['kode_barang'] ?></td>
 		<td><?php echo $data['nama_barang'] ?></td>
 		<td><?php echo $data['jumlah_barang'] ?></td>
 		<td><?php echo $data['kondisi_barang'] ?></td>
 		<td><?php echo $data['ruang_barang'] ?></td>
 		<td class="#">
 			<a href="#popup2?id=<?php echo $data['kode_barang'] ?>">Edit</a>
 		</td>
 		<td class="#">
 			<a href="barang/delete.php?id=<?php echo $data['kode_barang'] ?>"
 	 		onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
 		</td>
 	</tr>
 <?php } ?>
 </table>
</div>

<div id="popup">
    	<div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
       <h2>Tambah Barang</h2>
      <form method="post" action="barang/proses_tambah.php">
		<div class="kotak">
		<label style="margin-right: 230px;">Kode Barang</label>
		<input class="input" type="text" name="kode_barang">

		<label style="margin-right: 230px;">Nama Barang</label>
		<input class="input" type="text" name="nama_barang">	

		<label style="margin-right: 220px;">Jumlah Barang</label>
		<input class="input" type="number" name="jumlah_barang">

		<label style="margin-right: 215px;">Kondisi Barang</label>
		<input class="input" type="text" name="kondisi_barang">

		<label style="margin-right: 280px;">Ruang</label>
		<input class="input" type="text" name="ruang_barang">

		<input type="submit" class="edit" value="Tambah">
</div>
</form>
        </div>
    </div>

<div id="popup2">
    	<div class="window2">
        	<a href="#" class="close-button2" title="Close">X</a>
       <h2>Edit Barang</h2>
      <form method="post" action="barang/proses_edit.php">
		<div class="kotak">
		<label style="margin-right: 230px;">Kode Barang</label>
		<input class="input" type="number" name="kode_barang">

		<label style="margin-right: 230px;">Nama Barang</label>
		<input class="input" type="text" name="nama_barang">

		<label style="margin-right: 220px;">Jumlah Barang</label>
		<input class="input" type="number" name="jumlah_barang">

		<label style="margin-right: 215px;">Kondisi Barang</label>
		<input class="input" type="text" name="kondisi_barang">

		<label style="margin-right: 280px;">Ruang</label>
		<input class="input" type="text" name="
		ruang_barang">

		<input type="submit" class="edit" value="Edit">
</div>
</form>
        </div>
    </div>



<?php 
	include("../head_foot_oprt/footer.php")
 ?>