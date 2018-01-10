<?php
include '../../kelas/pegawai.php';
$controllogin = new Bagian_Penjualan();

if(isset($_POST['submit'])){
	$controllogin->login($_POST['email'],$_POST['password']);
}
 ?>
