<?php
class Crud_Barang
{
  // public function __construct()
  // {
  //     parent::__construct();
  // }

  public function tampilbarang($posisi)
  {
    include '../../koneksi.php';
    $result = $conn->query("SELECT * FROM barang LIMIT $posisi, 5");
    if($result->num_rows > 0) {
      while($row=$result->fetch_assoc()){
          $hasil[] = $row;
      }
    return $hasil;
    }
    $mysqli->close();
  }

  public function tambahbarang($kode_barang,$nama_barang,$harga,$stock,$foto,$jenis_kayu,$ukuran,$warna)
  {
    include '../../koneksi.php';
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../gambar/".$foto;

    if(empty($_POST["kode_barang"]) || empty($_POST["nama_barang"]) || empty($_POST["harga"]) ||
    empty($_POST["stock"]) || empty($_POST["jenis_kayu"]) || empty($_POST["ukuran"]) ||
    empty($_POST["warna"])){
    	    echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
    	    echo '<meta http-equiv="refresh" content="0; url=tambahdata.php">';
    }else{
         move_uploaded_file($tmp, $path);
         $conn->query("INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `stock`, `foto`, `jenis_kayu`, `ukuran`, `warna`)
       			VALUES ('$kode_barang', '$nama_barang', '$harga', '$stock', '$foto', '$jenis_kayu', '$ukuran', '$warna')");
         echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
    		 echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
    }
  }

  public function editbarang($kode_barang,$nama_barang,$harga,$stock,$foto,$jenis_kayu,$ukuran,$warna,$ubahfoto)
  {
    include '../../koneksi.php';
    // Cek apakah user ingin mengubah fotonya atau tidak
    if(isset($ubahfoto)){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
      // Ambil data foto yang dipilih dari form
      $foto = $_FILES['foto']['name'];
      $tmp = $_FILES['foto']['tmp_name'];

      // Set path folder tempat menyimpan fotonya
      $path = "../../gambar/".$foto;
      // Proses upload
      if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim

        $query = "SELECT * FROM barang WHERE kode_barang='".$kode_barang."'";
        $sql = $conn->query($query); // Eksekusi/Jalankan query dari variabel $query
        while($data=$sql->fetch_assoc()){
          if(is_file("../../gambar/".$data['foto'])){
            unlink("../../gambar/".$data['foto']);
          }
        }

          if(empty($_POST["kode_barang"]) || empty($_POST["nama_barang"]) || empty($_POST["harga"]) ||
          empty($_POST["stock"]) || empty($_POST["jenis_kayu"]) || empty($_POST["ukuran"]) ||
          empty($_POST["warna"])){
            echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
            echo '<meta http-equiv="refresh" content="0; url=editdata.php">';
          }else{
            $sql = "UPDATE `barang` SET `nama_barang`='$nama_barang', `harga`='$harga', `stock`='$stock', `foto`='$foto', `jenis_kayu`='$jenis_kayu', `ukuran`='$ukuran', `warna`='$warna' WHERE `kode_barang` = '$kode_barang'";
                $kueri = $conn->query($sql);
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
            $kueri = $conn->query($sql);
            echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
            echo '<meta http-equiv="refresh" content="0; url=databarang.php">';
      }
    }
  }

  public function hapusbarang($kode_barang)
  {
    include '../../koneksi.php';
    $query = "SELECT * FROM barang WHERE kode_barang='".$kode_barang."'";
    $sql = $conn->query($query); // Eksekusi/Jalankan query dari variabel $query
    while($data=$sql->fetch_assoc()){
      if(is_file("../../gambar/".$data['foto'])){
      	unlink("../../gambar/".$data['foto']);
      }

    }
       // Hapus foto yang telah diupload dari folder images
    // Query untuk menghapus data siswa berdasarkan NIS yang dikirim
    $query2 = "DELETE FROM barang WHERE kode_barang='".$kode_barang."'";
    $sql2 = $conn->query($query2); // Eksekusi/Jalankan query dari variabel $query
    if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: databarang.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Data gagal dihapus. <a href='databarang.php'>Kembali</a>";
    }
  }

}
?>
