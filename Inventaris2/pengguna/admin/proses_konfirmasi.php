<?php 
include '../../config/koneksi.php';
		$id=$_GET['acc_absen'];
		$ket=$_GET['keterangan'];
		if ($ket==="meminjam") {
			$query = "UPDATE tb_siswa SET status_pinjam='terkonfirmasi' WHERE id='$id'";
			if ($statement = $conn->prepare($query)) {
				if ($statement->execute()) {
					// sukses update
					header("location:confirm.php?ab=1");
				}else{
					//gagal update
					header("location:../absen&ab=2");
				}
				$conn->close();
			} else {
				header("location:../absen&ab=2");
			}
	}elseif($ket==="kembali"){
		$query = "UPDATE tb_siswa SET status_kembali='terkonfirmasi' WHERE id='$id'";
			if ($statement = $conn->prepare($query)) {
				if ($statement->execute()) {
					// sukses update
					header("location:confirm.php?ab=1");
				}else{
					//gagal update
					header("location:../absen&ab=2");
				}
				$conn->close();
			} else {
				header("location:../absen&ab=2");
			}
	}
 ?>