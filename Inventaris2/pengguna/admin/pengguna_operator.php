<?php 
	include("header/header.php");
	include '../../config/koneksi.php';

	$query="SELECT * FROM tb_pengguna WHERE level = 'operator' ";
	$hasil = mysqli_query($conn,$query);
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
		background-color: black;
		color: white;
		border: none;
		cursor: pointer;
	}
	.btn:hover{
		background: rgba(127 ,127, 127, 1);
		color: white;
	}

	table{
 		border: 5px solid black;
 		border-top: none;
 	}
 	th{
 		background-color: grey;
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
	height: 350px;
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
	margin-bottom: 10px;
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
	background-color: black;
	color: white;
	width: 70px;
	height: 30px;
	border: none;
	cursor: pointer;
	margin-left: 85%;
}


</style>
<div class="content">
	<h2>Daftar Operator</h2>
	<a href="#popup"><button class="btn">Tambah</button></a>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>No</th>
 		<th>Nama Operator</th>
 		<th>Username</th>
 		<th>Aksi</th>
 	</tr>
 	<?php while ($data=mysqli_fetch_array($hasil)) {
 		# code...
 	?>
 	<tr>
 		<td><?php echo $data['id'] ?></td>
 		<td><?php echo $data['nama'] ?></td>
 		<td><?php echo $data['username'] ?></td>
 		<td class="#">
 			<a href="delete.php?id=<?php echo $data['id'] ?>"onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
 		</td>
 	</tr>
 <?php } ?>
 </table>
</div>

<div id="popup">
    	<div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
       <h2>Tambah Operator</h2>
      <form method="post" action="proses_tambah.php">
		<div class="kotak">
		<input type="hidden" name="id">
		<input type="hidden" name="nis">

		<label style="margin-right: 210px;">Nama Operator</label>
		<input class="input" type="text" name="nama">

		<input type="hidden" name="email">

		<label style="margin-right: 250px;">Username</label>
		<input class="input" type="text" name="username">

		<label style="margin-right: 250px;">Password</label>
		<input class="input" type="text" name="password">

		<input type="hidden" name="level" value="operator">

		<input type="submit" class="edit" value="Tambah">
</div>
</form>
        </div>
    </div>

<?php 
	include("../footer/footer.php")
 ?>