<?php
include 'kelas/pembeli.php';
$controllogin = new Pembeli();

if(isset($_POST['submit'])){
	$controllogin->login($_POST['username'],$_POST['password']);
}
?>
