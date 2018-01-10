<?php
include '../../kelas/pemilik.php';
include '../../kelas/pesan.php';
$download = new Pesan();
$controllogin = new Pemilik();

$aksi = $_GET['aksi'];
$tahun = $_GET['tahun'];
$bulan = $_GET['bulan'];
if($aksi == "download"){
	$download->download($tahun, $bulan);
}

?>
