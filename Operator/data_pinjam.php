<?php 
	include("../head_foot_oprt/header.php")
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

	table{
 		border: 5px solid red;
 	}
 	th{
 		background-color: red;
 		text-align: center;
</style>
<div class="content">
	<h2>Data Peminjam</h2>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>No</th>
 		<th>Nama Peminjam</th>
 		<th>NIS</th>
 		<th>Nama Barang</th>
 		<th>Kode Barang</th>
 		<th>Tanggal Peminjaman</th>
 		<th colspan="2">Aksi</th>
 	</tr>
 	<tr>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td class="#">
 			<a href="edit_barang.php">Edit</a>
 		</td>
 		<td class="#">Delete</td>
 	</tr>
 </table>
</div>

<?php 
	include("../head_foot_oprt/footer.php")
 ?>