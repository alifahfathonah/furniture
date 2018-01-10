<?php
include "koneksi.php";
in

$crud->tambahpemesanan($_POST['id_pembeli'],$_POST['kode_barang'],$_POST['jumlah_barang'],$_POST['nama_bank']
$_POST['pemilik_rekening'],$_POST['jumlah_bayar'],$_POST['status'],$_POST['tanggal']);
?>
