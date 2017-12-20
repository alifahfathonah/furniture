<?php
include "../../koneksi.php";

$kode_barang = $_POST["kode_barang"];
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$stock = $_POST["stock"];
$jenis_kayu = $_POST["jenis_kayu"];
$ukuran = $_POST["ukuran"];
$warna = $_POST["warna"];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya
$path = "../../gambar/".$foto;
// Proses upload
move_uploaded_file($tmp, $path);

if(empty($_POST["kode_barang"]) || empty($_POST["nama_barang"]) || empty($_POST["harga"]) ||
empty($_POST["stock"]) || empty($_POST["jenis_kayu"]) || empty($_POST["ukuran"]) ||
empty($_POST["warna"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambahdata.php">';
}else{
	$sql = "INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `stock`, `foto`, `jenis_kayu`, `ukuran`, `warna`)
			VALUES ('$kode_barang', '$nama_barang', '$harga', '$stock', '$foto', '$jenis_kayu', '$ukuran', '$warna')";
			$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
			echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
}


?>
