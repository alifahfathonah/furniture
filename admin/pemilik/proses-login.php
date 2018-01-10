<?php
include '../../kelas/pemilik.php';
$controllogin = new Pemilik();

if(isset($_POST['submit'])){
	$controllogin->login($_POST['email'],$_POST['password']);
}
?>
