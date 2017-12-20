<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Detail Produk</title>
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard"/>
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">

    	hr {
    		border: solid 2px black;
    	}
    	.box1 {
    		width: 400px;
    		height: 400px;
    		margin-right: 20px;
    		border: solid 2px black;

    	}

    	.box2 {
    		width: 400px;
    		height: 360px;
				padding: 20px;
    		margin-right: 20px;
    		border: solid 2px black;
    	}

    	.parent {
    		display: flex;

    	}

    	.row {
    		border: solid 2px black;
    		padding: 20px;
    	}
    </style>
</head>
<body>

	<!--start: Header -->


	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<center><h2><i class=""></i>Furniture Suka Mundur Kadang Maju</h2></center>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Page Title -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
    	<div class="container">

      		<!-- start: Row -->
					<?php
					include "koneksi.php";
					// Ambil data NIS yang dikirim oleh index.php melalui URL
					$kode_barang = $_GET['detail'];

					// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
					$query = "SELECT * FROM barang WHERE kode_barang='".$kode_barang."'";
					$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
					$hasil = mysqli_fetch_array($sql)
					?>
      		<div class="row">
            <div class="col-sm-6">
                    <table>
                    	<h2>Detail Barang</h2>
                    	<div class="parent">
     					<div class="box1">
     						<img src="gambar/<?php echo $hasil['foto']; ?>" width='400px' height='50px'>
     					</div>
     					<div class="box2">
     						<p>
     							<?php echo $hasil['nama_barang']; ?><br>
     							Rp. <?php echo $hasil['harga']; ?> <br>

     							* Kode Barang : <?php echo $hasil['kode_barang']; ?> <br>
     							* Material  : <?php echo $hasil['jenis_kayu']; ?> <br>
     							* Ukuran : <?php echo $hasil['ukuran']; ?> <br>
     							<br><br>
     							<br>
     							<hr>
     							Untuk order produk dan pemesan dapat dilakukan dengan mengklik <br>
     							link atau tombol di bawah ini : <br><a href="pemesanan.php?pemesanan=<?php echo $hasil['kode_barang']; ?>"><button type="button" class="btn btn-success">Pesan Barang</button></a> <br>
     							atau tersedia di menu utama

     						</p>
     					</div>
     					</div>
                    </table>
                    </div>
                    <!--</div> -->
        		<!--</div> -->
<!---->
      		</div>
			<!-- end: Row -->


				</div>


				</div>

                </div>
			</div>
			<!--end: Row-->

		</div>
		<!--end: Container-->

<br>
<br>
</body>
</html>
