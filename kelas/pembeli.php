<?php
class Pembeli
{
    public function login()
    {
      //bagian barrur
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
