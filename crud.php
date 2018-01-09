<?php
class Crud_Barang
{
  // public function __construct()
  // {
  //     parent::__construct();
  // }

  public function tampilbarang($posisi)
  {
    include 'koneksi.php';
    $result = $conn->query("SELECT * FROM barang LIMIT $posisi, 4");
    if($result->num_rows > 0) {
      while($row=$result->fetch_assoc()){
          $hasil[] = $row;
      }
    return $hasil;
    $conn->close();
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

  public function tampilbarangspesifik($kode_barang)
  {
    include 'koneksi.php';
    $result = $conn->query("SELECT * FROM barang WHERE kode_barang='".$kode_barang."'");
      while($row=$result->fetch_assoc()){
          $hasil[] = $row;
      }
    return $hasil;
    }
  }
?>
