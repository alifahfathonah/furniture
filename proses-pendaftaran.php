 <?php
 <?php
 include 'kelas/pembeli.php';
 $pendaftaran = new Pembeli();

 if(isset($_POST['submit'])){
 	$pendaftaran->daftar(  $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_pegawai = $_POST['id_pegawai'];
);
 }
 ?>
