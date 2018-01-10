<?php
class Pesan
{
  public function tambahpemesanan($kode_barang,$nama_barang,$harga,$stock,$foto,$jenis_kayu,$ukuran,$warna)
  {
    include '../../koneksi.php';
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../gambar/".$foto;

    if(empty($_POST["id_pembeli"]) || empty($_POST["kode_barang"]) || empty($_POST["jumlah_barang"]) || empty($_POST["nama_bank"]) || empty($_POST["pemilik_rekening"]) || empty($_POST["jumlah_bayar"]) || empty($_POST["status"]) || empty($_POST["tanggal"])){
    	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
    	echo '<meta http-equiv="refresh" content="0; url=pemesanan.php">';
    }else{
    	$conn->query("INSERT INTO `pemesanan` (`id_transaksi`, `id_pembeli`, `kode_barang`, `jumlah_barang`, `nama_bank`, `pemilik_rekening`, `jumlah_bayar`, `status`, `tanggal` )
    			VALUES (NULL, '$id_pembeli', '$kode_barang', '$jumlah_barang', '$nama_bank', '$pemilik_rekening', '$jumlah_bayar', '$status', '$tanggal')");
    			echo '<meta http-equiv="refresh" content="0; url=pesan.php">';
    }
  }

    public function tampilpemesanan($posisi)
    {
      include '../../koneksi.php';
      $result = $conn->query("SELECT pembeli.nama_pembeli, pembeli.telepon, pembeli.alamat_pembeli, barang.nama_barang, pemesanan.jumlah_barang, pemesanan.nama_bank, pemesanan.pemilik_rekening, pemesanan.jumlah_bayar, pemesanan.status, pemesanan.id_transaksi FROM (barang join pemesanan on barang.kode_barang = pemesanan.kode_barang) join pembeli on pemesanan.id_pembeli = pembeli.id_pembeli LIMIT $posisi, 5");
      if($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
            $hasil[] = $row;
        }
      return $hasil;
      }
    }

    public function ubahstatus($id_transaksi, $konfirmasi)
    {
       include '../../koneksi.php';  
       if ($konfirmasi == "Belum"){
             $status 		= "Terbayar";
             $conn->query("UPDATE `pemesanan` SET `status`='$status' WHERE `id_transaksi` = '$id_transaksi'");
             echo "<script language='javascript'>alert('Berhasil di Konfirmasi');</script>";
             echo '<meta http-equiv="refresh" content="0; url=datapenjualan.php">';
       }else {
         echo "Gagal";
       }
    }

    public function tampillaporan($posisi)
    {
      include '../../koneksi.php';
      $result = $conn->query("SELECT DISTINCT date_format(tanggal, '%Y') as tahun, date_format(tanggal, '%M') as bulan  FROM `pemesanan` LIMIT $posisi, 5");
      if($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
            $hasil[] = $row;
        }
      return $hasil;
      }
    }

    public function download($tahun, $bulan)
    {
      include '../../koneksi.php';
      $result = $conn->query("SELECT pembeli.nama_pembeli, pembeli.telepon, pembeli.alamat_pembeli, barang.nama_barang, pemesanan.jumlah_barang, pemesanan.nama_bank, pemesanan.pemilik_rekening, pemesanan.jumlah_bayar, pemesanan.status, pemesanan.id_transaksi FROM (barang join pemesanan on barang.kode_barang = pemesanan.kode_barang) join pembeli on pemesanan.id_pembeli = pembeli.id_pembeli WHERE year(pemesanan.tanggal) = '$tahun' AND month(pemesanan.tanggal) = '$bulan'");
      if($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
            $hasil[] = $row;
        }
      return $hasil;
      }
    }
}
?>
