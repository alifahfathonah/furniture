<?php
session_start();
include "koneksi.php";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysqli_query($conn, "SELECT * FROM pembeli WHERE email='$username' AND password='$password'");
	$num = mysqli_num_rows($sql);
	if($num>0){
		$num2 = mysqli_fetch_array($sql);
		$_SESSION['id_pembeli'] = $num2['id_pembeli'];
		$_SESSION['email'] = $username;
		$_SESSION['password'] = $password;
		echo "<script language='javascript'>alert('Login Berhasil')</script>";
		echo '<meta http-equiv="refresh" content="0; url=masuk.php">';
	}else{
		echo "<script language='javascript'>alert('Login Gagal')</script>";
		echo '<meta http-equiv="refresh" content="0; url=login.php">';
	}
}
?>
