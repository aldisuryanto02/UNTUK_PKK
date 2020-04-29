
<link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.min.css">
<style>
  .content2{
    width: 60%;
    margin-left: 38%;

  }
  .page-header{
      margin-left: 38%;
      margin-top: 12%;
  }
  .berhasil{
    width: 60%;
    margin-left: 38%;
  }
  .gagal{
    width: 60%;
    margin-left: 38%;
  }
  .ditolak{
    width: 60%;
    margin-left: 38%;
  }
</style>
<!-- <?php   include 'header/header.php'; ?> -->
<h3 class="page-header">Konfirmasi</h3>
<?php
  // include 'header/header.php';
  include '../../config/koneksi.php';
  $sql = "SELECT * FROM tb_siswa WHERE status_pinjam='menunggu' OR status_kembali='menunggu'";
  $query = $conn->query($sql);
  
  if (isset($_GET['ab'])) {
      if ($_GET['ab']==1) {
        echo"<div class='alert alert-success Berhasil'><strong>Absen telah dikonfirmasi.</strong></div>";
      } elseif($_GET['ab']==2) {
        echo "<div class='alert alert-danger gagal'><strong>Gagal, Silahkan Coba Kembali!</strong></div>";
      } elseif($_GET['ab']==3) {
        echo "<div class='alert alert-warning ditolak'><strong>Absen berhasil ditolak.</strong></div>";
      } 
    } 
   ?>
          <div class='table-responsive'>
                 <table class='table table-striped content2'>
                  <thead>
                     <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Keterangan</th>
                      <th>Hari, Tanggal</th>
                      <th>Pukul</th>
                      <th>nama barang</th>
                      <th>status</th>
                      <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                <tr>
                  <?php   
                       $no=0;
                  while ($get_data=$query->fetch_assoc()) {
                    $id=$get_data['id'];
                    $nama_user = $get_data['nama_user'];
                    $nama_barang = $get_data['nama_barang'];
                    $status=$get_data['status_pinjam'];
                    $status=$get_data['status_kembali'];
                    $date=date('y-m-d');
                    $ket=$get_data['keterangan'];
                    $waktu = $get_data['waktu_kembali'];
                    $waktu = $get_data['waktu_pinjam'];
                    if ($get_data['status_pinjam']==="Menunggu") {
                    $date=$get_data['tanggal_pinjam'];
                  }elseif ($get_data['status_kembali']==="menunggu"){
                    $date=$get_data['tanggal_kembali'];
                  }
                    $no++;   

                        
                   ?>
                <td><?php   echo $no ?></td>
                <td><?php   echo $nama_user ?></td>
                <td><?php   echo $ket ?></td>
                <td><?php   echo $date ?></td>
                <td><?php   echo $waktu ?></td>
                <td><?php   echo $nama_barang ?></td>
                <td><?php   echo $status ?></td>
                <?php
                  echo"<td>
                  <button type='button' class='btn btn-warning' onclick=\"window.location.href='proses_konfirmasi.php?acc_absen=$id&keterangan=$ket';\">Konfirmasi</button>&nbsp;
                  <button type='button' class='btn btn-danger'  onclick=\"window.location.href='proses_tolak.php?dec_absen=$id&keterangan=$ket';\">Tolak</button>
                  </td>"
                 ?>
                </tr>
                 <?php } ?>
          
          
        </tbody></table></div> 