<?php 
	include("header/header.php");
	include '../../config/koneksi.php';

	$query="SELECT * FROM tb_pengguna WHERE level = 'user'";
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

	table{
 		border: 5px solid black;
 		border-top: none;
 	}
 	th{
 		background-color: grey;
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
 		<td><?php echo $data['nip_nis'] ?></td>
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
	include("../footer/footer.php")
 ?>