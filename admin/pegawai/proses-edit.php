<?php
include "../../koneksi.php";

$kode_barang = $_POST["kode_barang"];
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$stock = $_POST["stock"];
$jenis_kayu = $_POST["jenis_kayu"];
$ukuran = $_POST["ukuran"];
$warna = $_POST["warna"];
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];

  // Set path folder tempat menyimpan fotonya
  $path = "../../gambar/".$foto;
	// Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM barang WHERE kode_barang='".$kode_barang."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../../".$data['foto'])) // Jika foto ada
      unlink("../../".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

			if(empty($_POST["kode_barang"]) || empty($_POST["nama_barang"]) || empty($_POST["harga"]) ||
			empty($_POST["stock"]) || empty($_POST["jenis_kayu"]) || empty($_POST["ukuran"]) ||
			empty($_POST["warna"])){
				echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
				echo '<meta http-equiv="refresh" content="0; url=editdata.php">';
			}else{
				$sql = "UPDATE `barang` SET `nama_barang`='$nama_barang', `harga`='$harga', `stock`='$stock', `foto`='$foto', `jenis_kayu`='$jenis_kayu', `ukuran`='$ukuran', `warna`='$warna' WHERE `kode_barang` = '$kode_barang'";
						$kueri = mysqli_query($conn, $sql);
						echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
						echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
			}
  }else{
		echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
		echo '<meta http-equiv="refresh" content="0; url=editdata.php">';
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	if(empty($_POST["kode_barang"]) || empty($_POST["nama_barang"]) || empty($_POST["harga"]) ||
	empty($_POST["stock"]) || empty($_POST["jenis_kayu"]) || empty($_POST["ukuran"]) ||
	empty($_POST["warna"])){
		echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
		echo '<meta http-equiv="refresh" content="0; url=editdata.php">';
	}else{
		$sql = "UPDATE `barang` SET `nama_barang`='$nama_barang', `harga`='$harga', `stock`='$stock', `jenis_kayu`='$jenis_kayu', `ukuran`='$ukuran', `warna`='$warna' WHERE `kode_barang` = '$kode_barang'";
				$kueri = mysqli_query($conn, $sql);
				echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
				echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
	}
}











?>


?>
