<?php
include 'crud.php';
$crud = new Crud_Barang();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
  $crud->tambahbarang($_POST['kode_barang'],$_POST['nama_barang'],$_POST['harga'],$_POST['stock'],$_FILES['foto'],
  $_POST['jenis_kayu'],$_POST['ukuran'],$_POST['warna']);
 } elseif($aksi == "hapus"){
 	$crud->hapusbarang($_GET['hapus']);
}elseif($aksi == "edit"){
 	$crud->editbarang($_POST['kode_barang'],$_POST['nama_barang'],$_POST['harga'],$_POST['stock'],$_FILES['foto'],
  $_POST['jenis_kayu'],$_POST['ukuran'],$_POST['warna'],$_POST['ubah_foto']);
 }
?>

?>
