<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Si-Barang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style media="screen">
    .box {padding: 20px 15px 15px 20px;
          height: 380px;}
    th{text-align: center;}

    .box1 {
      width: 400px;
      height: 250px;
      margin-right: 20px;
    }

    .box2 {
      width: 400px;
      height: 250px;
      margin-right: 20px;
    }
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->

  <!-- Logo -->
  <a href="#" class="logo">
    <span class="logo-lg">SI-BARANG</span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- User Account Menu -->
          <li>
          <!-- Menu Toggle Button -->
          <a href="#" >

            Keluar
          </a>
        </li>
      </ul>
    </div>
  </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="../databarang.php"><span>Data Barang</span></a></li>
        <li class="active"><a href="../datapenjualan.php"><span>Data Penjualan</span></a></li>
    </ul>

        <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Edit Data Barang
      </h1>
      <br>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box box-info">
        <?php
        include "../../koneksi.php";
        // Ambil data NIS yang dikirim oleh index.php melalui URL
        $kode_barang = $_GET['edit'];

        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
        $query = "SELECT * FROM barang WHERE kode_barang='".$kode_barang."'";
        $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
        $data = mysqli_fetch_array($sql)
        ?>
        <form action="proses-edit.php" method="POST" enctype="multipart/form-data" >
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" readonly="readonly" placeholder="Kode Barang" value="<?= $data['kode_barang'] ?>" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="<?= $data['nama_barang'] ?>" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="harga" placeholder="Harga Barang" value="<?= $data['harga'] ?>" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Stock</label>
                  <input type="text" class="form-control" name="stock" placeholder="Stock Barang" value="<?= $data['stock'] ?>" style="width: 250px" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Foto</label>
                  <br>
                  <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                  <input type="file" name="foto">
                </div>

                <div class="form-group">
                  <label>Jenis Kayu</label>
                  <input type="text" class="form-control" name="jenis_kayu" placeholder="Jenis Kayu" value="<?= $data['jenis_kayu'] ?>" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Ukuran</label>
                  <input type="text" class="form-control" name="ukuran" placeholder="Ukuran" value="<?= $data['ukuran'] ?>" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Warna</label>
                  <input type="text" class="form-control" name="warna" placeholder="Warna" value="<?= $data['warna'] ?>" style="width: 250px" >
                </div>
              <input type="submit" name="submit" value="Ubah" class="btn btn-success">
              <a href="databarang.php"><input type="button" class="btn btn-default" value="Batal" ></a>
              </form>
              </div>




       </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright Kelompok ADSI &copy; 2017
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
