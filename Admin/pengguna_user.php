<?php 
	include("../head_foot_adm/header.php");
	include '../config/koneksi.php';

	$query="SELECT * FROM tb_user WHERE level = 'user' ";
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
	<h2>Daftar User</h2>

	<table border="1" width="800px" cellpadding="10px" cellspacing="0">
 	<tr>
 		<th>No</th>
 		<th>NIS</th>
 		<th>Nama User</th>
 		<th>Username</th>
 		<th>Aksi</th>
 	</tr>
 	<?php 
 		while ($data=mysqli_fetch_array($hasil)) {
 			# code...
 	 ?>
 	<tr>
 		<td><?php echo $data['id'] ?></td>
 		<td><?php echo $data['nis'] ?></td>
 		<td><?php echo $data['nama'] ?></td>
 		<td><?php echo $data['username'] ?></td>
 		<td class="#">
 			<a href="">Delete</a>
 		</td>
 	</tr>
 <?php } ?>
 </table>
</div>

<?php 
	include("../head_foot_adm/footer.php")
 ?>