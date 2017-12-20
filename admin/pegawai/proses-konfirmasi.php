<?php
    include "../../koneksi.php";
    
    $id_transaksi 		=  $_GET['id_transaksi'];
    $konfirmasi 		=  $_GET['konfirmasi'];

    if ($konfirmasi == "Belum"){
          $status 		= "Terbayar";
          $sql = "UPDATE `pemesanan` SET `status`='$status' WHERE `id_transaksi` = '$id_transaksi'";
          $kueri = mysqli_query($conn, $sql);
          echo "<script language='javascript'>alert('Berhasil di Konfirmasi');</script>";
          echo '<meta http-equiv="refresh" content="0; url=datapenjualan.php">';
    }else {
      echo "Salah";
    }

 ?>
