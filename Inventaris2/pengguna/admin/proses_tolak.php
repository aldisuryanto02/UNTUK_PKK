<?php 
include '../../config/koneksi.php';
$id=$_GET['dec_absen'];
$ket=$_GET['keterangan'];
		if ($ket==="meminjam") {
			$query = "UPDATE tb_siswa SET status_pinjam='ditolak' WHERE id='$id'";
			if ($statement = $conn->prepare($query)) {
				if ($statement->execute()) {
					// sukses update
					header("location:confirm.php?ab=1");
				}else{
					//gagal update
					header("location:confirm.php?ab=2");
				}
				$conn->close();
			} else {
				header("location:confirm.php?ab=2");
			}
			
		}elseif($ket==="kembali"){
			$query = "UPDATE tb_siswa SET status_kembali='ditolak' WHERE id='$id'";
			if ($statement = $conn->prepare($query)) {
				if ($statement->execute()) {
					// sukses update
					header("location:confirm.php?ab=1");
				}else{
					//gagal update
					header("location:confirm.php?ab=2");
				}
				$conn->close();
			} else {
				header("location:confirm.php?ab=2");
			}
		}
 ?>