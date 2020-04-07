<?php 
	include("../head_foot_adm/header.php");
	include '../config/koneksi.php';

	$query="SELECT * FROM tb_ruang";
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
	height: 280px;
	left: 10%;
	top: -5%;
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
	width: 8%;
	height: 8%;
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
	height: 100%;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	z-index: 9999;
	visibility: hidden;
}
.window2 {
	width: 385px;
	height: 280px;
	left: 10%;
	top: -5%;
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
	width: 8%;
	height: 8%;
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
	<h2>Data Ruang</h2>
	<a href="#popup"><button class="btn">Tambah</button></a>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>Kode Ruang</th>
 		<th>Nama Ruang</th>
 		<th colspan="2">Aksi</th>
 	</tr>
 	<?php 
 		while ($data=mysqli_fetch_array($hasil)) {
 		
 	 ?>
 	<tr>
 		<td><?php echo $data['kode_ruang'] ?></td>
 		<td><?php echo $data['nama_ruang'] ?></td>
 		<td class="#">
 			<a href="#popup2">Edit</a>
 		</td>
 		<td class="#">
 			<a href="ruang/delete2.php?id=<?php echo $data['kode_ruang'] ?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
 		</td>
 	</tr>
 <?php } ?>
 </table>
</div>

<div id="popup">
    	<div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
       <h2>Tambah Ruang</h2>
      <form method="post" action="ruang/tambah_ruang.php">
		<div class="kotak">
		<label style="margin-right: 230px;">Kode Ruang</label>
		<input class="input" type="text" name="kode_ruang">

		<label style="margin-right: 230px;">Nama Ruang</label>
		<input class="input" type="text" name="nama_ruang">

		<input type="submit" class="edit" value="Tambah">
</div>
</form>
        </div>
    </div>

<div id="popup2">
    	<div class="window2">
        	<a href="#" class="close-button2" title="Close">X</a>
       <h2>Edit Ruang</h2>
      <form method="post" action="ruang/edit_ruang.php">
		<div class="kotak">
		<label style="margin-right: 230px;">Kode Ruang</label>
		<input class="input" type="number" name="kode_ruang" value="<?php echo $data['kode_ruang'] ?>">

		<label style="margin-right: 230px;">Nama Ruang</label>
		<input class="input" type="text" name="nama_ruang" value="<?php echo $data['nama_ruang'] ?>">

		<input type="submit" class="edit" value="Edit">
</div>
</form>
        </div>
    </div>



<?php 
	include("../head_foot_oprt/footer.php")
 ?>