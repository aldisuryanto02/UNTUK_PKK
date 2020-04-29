<?php
include("header/header.php");
include("../../config/koneksi.php");
$query = "SELECT * FROM tb_barang";
$hasil = mysqli_query($conn, $query);

?>

<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
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
		while ($data = mysqli_fetch_array($hasil)) {
		?>
			<tr>
				<td><?php echo $data['kode_barang'] ?></td>
				<td><?php echo $data['nama_barang'] ?></td>
				<td><?php echo $data['jumlah_barang'] ?></td>
				<td><?php echo $data['kondisi_barang'] ?></td>
				<td><?php echo $data['ruang_barang'] ?></td>
				<td class="#">
					<a href="#popup2" class="editpop" data-id='<?php echo $data['kode_barang'] ?>'>Edit</a>
				</td>
				<td class="#">
					<a href="barang/delete.php?id=<?php echo $data['kode_barang'] ?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
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
				<!-- <label style="margin-right: 230px;">Kode Barang</label> -->
				<input id="kode-barang" class="input" type="hidden" name="kode_barang" value="<?php echo $data['kode_barang'] ?>">

				<label style="margin-right: 230px;">Nama Barang</label>
				<input id="nama-barang" class="input" type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">

				<label style="margin-right: 220px;">Jumlah Barang</label>
				<input id="jumlah-barang" class="input" type="number" name="jumlah_barang" value="<?php echo $data['jumlah_barang'] ?>">

				<label style="margin-right: 215px;">Kondisi Barang</label>
				<input id="kondisi-barang" class="input" type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang'] ?>">

				<label style="margin-right: 280px;">Ruang</label>
				<input id="ruang-barang" class="input" type="text" name="ruang_barang" value="<?php echo $data['ruang_barang'] ?>">

				<input type="submit" class="edit" value="Edit">
			</div>
		</form>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
	$('.editpop').on('click',function(){
		
	
	
			// var ajax = new XMLHttpRequest();
			// ajax.onreadystatechange = function(){
			// 	if(ajax.readyState==4 && ajax.status==200){
			// 		console.log(ajax.responseText['kode_barang']);
			// 	}
			// }
			// ajax.open('GET','edit.php?data='+$(this).data('id'),true);
			// ajax.send();
			$.ajax({
            url: 'edit.php',
            data: {
                id: $(this).data('id')
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
				$('#nama-barang').val(data.nama_barang);
				$('#kode-barang').val(data.kode_barang);
				$('#ruang-barang').val(data.ruang_barang);
				$('#kondisi-barang').val(data.kondisi_barang);
				$('#jumlah-barang').val(data.jumlah_barang);
			}
        });

		});
	</script>

<?php
include("../footer/footer.php")
?>