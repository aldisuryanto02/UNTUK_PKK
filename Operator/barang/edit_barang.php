<?php 
	include("../../head_foot_oprt/header.php");
	include '../../config/koneksi.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM tb_barang WHERE kode_barang='$id'" ;

 	$hasil = mysqli_query($conn,$query);
 ?>
 <style>
 	.content{
		margin-left: 32%;
 		padding-top: 8%;
 		height: 532px;
	}
	.content h2{
		margin-bottom: 50px;
	}
	.input{
  		height: 20px;
  		width: 100%;
  		margin-top: 5px;
  		padding: 10px;
  		margin-bottom: 20px;
} 
	.kotak{
  		background : none;
  		margin-left: 20%;
  		width: 320px;
  		padding: 20px;
}
.jarak{
	margin-bottom: 100px;
}
.edit{
	background-color: red;
	width: 70px;
	height: 30px;
	border: none;
	cursor: pointer;
	margin-left: 85%;
}

 </style>
<div class="content">
	<h2>Edit Barang</h2>
	<form method="post" action="proses_edit.php">
		<?php 
 			$data=mysqli_fetch_array($hasil);
 		 ?>
		<div class="kotak">
		<input class="input" type="hidden" name="id" value="<?php echo $data['kode_barang'] ?>">

		<label style="margin-right: 230px;">Nama Barang</label>
		<input class="input" type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">

		<label style="margin-right: 220px;">Jumlah Barang</label>
		<input class="input" type="number" name="jumlah_barang" value="<?php echo $data['jumlah_barang']; ?>">

		<label style="margin-right: 215px;">Kondisi Barang</label>
		<input class="input" type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang'] ?>">

		<label style="margin-right: 280px;">Ruang</label>
		<input class="input" type="text" name="ruang_barang" value="<?php echo $data['ruang_barang'] ?>">

		<input type="submit" class="edit" value="Edit">
	</div>
		</form>
		
</div>
<?php 
	include("../../head_foot_oprt/footer.php"); 
?>
