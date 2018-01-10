<?php
$tahun 		=  $_GET['tahun'];
$bulan =  $_GET['bulan'];

ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Penjualan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style media="screen">
    .box {padding: 20px 15px 15px 20px }
    th{text-align: center;}

  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<center><h1>Furniture Suka Mundur Kadang Maju</h1></center>
<hr>
<h3>Laporan Penjualan Bulanan</h3>
<p>Tahun : <?php echo $tahun; ?></p>
<p>Bulan : <?php echo $bulan; ?></p>
<table  class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>No. Tlp</th>
      <th>Alamat</th>
      <th>Produk</th>
      <th>Jumlah</th>
      <th>Bank</th>
      <th>Pemilik Rekening</th>
      <th>Total Bayar</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
      <?php
        include "../../koneksi.php";
        include '../../kelas/pesan.php';
        $download = new Pesan();
        if ($bulan == "January") {
          $bulan = "01";
        }else if($bulan == "February") {
          $bulan = "02";
        }else if ($bulan == "March") {
          $bulan = "03";
        }else if($bulan == "April") {
          $bulan = "04";
        }else if($bulan == "May") {
          $bulan = "05";
        }else if ($bulan == "June") {
          $bulan = "06";
        }else if($bulan == "July") {
          $bulan = "07";
        }else if($bulan == "August") {
          $bulan = "08";
        }else if ($bulan == "September") {
          $bulan = "09";
        }else if($bulan == "October") {
          $bulan = "10";
        }else if($bulan == "November") {
          $bulan = "11";
        }else if ($bulan == "December") {
          $bulan = "12";
        }
        $i = 1;
        foreach($download->download($tahun, $bulan) as $hasil){
     ?>
      <tr>
        <td style="text-align: center;"><?php echo $i; ?></td>
        <td><?php echo $hasil['nama_pembeli']; ?></td>
        <td><?php echo $hasil['telepon']; ?></td>
        <td><?php echo $hasil['alamat_pembeli']; ?></td>
        <td><?php echo $hasil['nama_barang']; ?></td>
        <td><?php echo $hasil['jumlah_barang']; ?></td>
        <td><?php echo $hasil['nama_bank']; ?></td>
        <td><?php echo $hasil['pemilik_rekening']; ?></td>
        <td><?php echo $hasil['jumlah_bayar']; ?></td>
        <td><?php echo $hasil['status']; ?></td>
      </tr>
      <?php
          $i++;
          }
        ?>
  </tbody>
</table>
</body>
</html>
<?php

$html = ob_get_clean();
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan.pdf');



//
// (Optional) Setup the paper size and orientation


 ?>
