<?php 
	include("../head_foot_oprt/header.php");
	include '../config/koneksi.php';

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
</style>
<div class="content">
	<h2>Data Barang</h2>

	<a href="barang/tambahdata.php"><button class="btn">Tambah</button></a>

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
 			<a href="barang/edit_barang.php?id=<?php echo $data['kode_barang'] ?>">Edit</a>
 		</td>
 		<td class="#">
 			<a href="barang/delete.php?id=<?php echo $data['kode_barang'] ?>"
 	 		onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
 		</td>
 	</tr>
 <?php } ?>
 </table>
</div>

<?php 
	include("../head_foot_oprt/footer.php")
 ?>