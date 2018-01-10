<?php
class Pembeli
{
    public function login($username, $password)
    {
      session_start();
      include "koneksi.php";
      if(isset($_POST['submit'])){
      	$sql = $conn->query("SELECT * FROM pembeli WHERE email='$username' AND password='$password'");
      	$num = mysqli_num_rows($sql);
      	if($num>0){
      		$num2 = $sql->fetch_assoc();
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
    }

    public function daftar($nama, $alamat, $telp, $email, $password, $id_pegawai)
    {
      include 'koneksi.php';
      $sql = "INSERT INTO pembeli (nama_pembeli, alamat_pembeli, telepon, email, password, id_pegawai) VALUE ('$nama', '$alamat', '$telp', '$email', '$password', '$id_pegawai')";
      $query = $conn->query($sql);

      if ($query) {
        echo "<script language='javascript'>alert('Berhasil Daftar');</script>";
        echo '<meta http-equiv="refresh" content="0; url=login.php">';
      }

    }

    public function tampilpembeli($id_pembeli)
    {
      include 'koneksi.php';
      $query = "SELECT * FROM pembeli WHERE id_pembeli='".$id_pembeli."'";
      $sql = $conn->query($query); // Eksekusi/Jalankan query dari variabel $query
      while($row=$sql->fetch_assoc()){
          $hasil[] = $row;
      }
      return $hasil;
    }




}
?>
