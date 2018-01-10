<?php
  class Bagian_Penjualan
  {

      public function login($username, $password)
      {
        session_start();
        include "../../koneksi.php";
        if(isset($_POST['submit'])){
        	$sql = $conn->query("SELECT * FROM pegawai WHERE email='$username' AND pass='$password'");
        	$num = mysqli_num_rows($sql);
        	if($num>0){
        		$num2 = $sql->fetch_assoc();
        		$_SESSION['id_pegawai'] = $num2['id_pegawai'];
        		$_SESSION['email'] = $username;
        		$_SESSION['password'] = $password;
        		echo "<script language='javascript'>alert('Login Berhasil')</script>";
        		echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
        	}else{
            echo "<script language='javascript'>alert('Login Gagal')</script>";
            echo '<meta http-equiv="refresh" content="0; url=index.php">';

          }
      }

    }
}




?>
