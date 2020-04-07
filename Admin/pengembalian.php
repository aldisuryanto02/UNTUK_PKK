<?php 
	include("../head_foot_adm/header.php")
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
	<h2>Daftar Pengembalian</h2>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>No</th>
 		<th>Nama Peminjam</th>
 		<th>NIS</th>
 		<th>Nama Barang</th>
 		<th>Kode Barang</th>
 		<th>Tangal Pengembalian</th>
 		<th>Aksi</th>
 	</tr>
 	<tr>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td>1</td>
 		<td class="#">
 			<a href="">Delete</a>
 		</td>
 	</tr>
 </table>
</div>

<?php 
	include("../head_foot_adm/footer.php")
 ?>