<?php
include '../../kelas/pesan.php';
include '../../kelas/barang.php';
$ubahstatus = new Pesan();
$databarang = new Barang();

if($_GET['aksi'] == "tambah"){
  $databarang->tambah_barang($_POST['kode_barang'],$_POST['nama_barang'],$_POST['harga'],$_POST['stock'],$_FILES['foto'],
  $_POST['jenis_kayu'],$_POST['ukuran'],$_POST['warna']);
 } elseif($_GET['aksi'] == "hapus"){
 	$databarang->hapus_barang($_GET['hapus']);
}elseif($_GET['aksi'] == "edit"){
 	$databarang->edit_barang($_POST['kode_barang'],$_POST['nama_barang'],$_POST['harga'],$_POST['stock'],$_FILES['foto'],
  $_POST['jenis_kayu'],$_POST['ukuran'],$_POST['warna'],$_POST['ubah_foto']);
}elseif ($_GET['aksi'] == "konfirmasi") {
  $ubahstatus->ubah_status($_GET['id_transaksi'],$_GET['konfirmasi']);
}





?>
