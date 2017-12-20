<?php
include "koneksi.php";

$id_pembeli = $_POST["id_pembeli"];
$kode_barang = $_POST["kode_barang"];
$jumlah_barang = $_POST["jumlah_barang"];
$nama_barang = $_POST["nama_bank"];
$pemilik_rekening = $_POST["pemilik_rekening"];
$jumlah_bayar = $_POST["jumlah_bayar"];
$status = $_POST["status"];
$tanggal = $_POST["tanggal"];

if(empty($_POST["id_pembeli"]) || empty($_POST["kode_barang"]) || empty($_POST["jumlah_barang"]) || empty($_POST["nama_bank"]) || empty($_POST["pemilik_rekening"]) || empty($_POST["jumlah_bayar"]) || empty($_POST["status"]) || empty($_POST["tanggal"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=pemesanan.php">';
}else{
	$sql = "INSERT INTO `pemesanan` (`id_transaksi`, `id_pembeli`, `kode_barang`, `jumlah_barang`, `nama_bank`, `pemilik_rekening`, `jumlah_bayar`, `status`, `tanggal` )
			VALUES (NULL, '$id_pembeli', '$kode_barang', '$jumlah_barang', '$nama_bank', '$pemilik_rekening', '$jumlah_bayar', '$status', '$tanggal')";
			$kueri = mysqli_query($conn, $sql);
			echo '<meta http-equiv="refresh" content="0; url=pesan.php">';
}


?>
