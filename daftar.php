<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Daftar Pengguna</title>
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
    		height: 200px;
    		margin-right: 20px;
    	}

    	.box2 {
    		width: 400px;
    		height: 200px;
    		margin-right: 20px;
    	}

    	.parent {
    		display: flex;
    		margin: 20px;
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

      		<div class="row">
            <div class="col-sm-6">
                <form action="proses-pendaftaran.php" method="post" name="form1">
                    <table>

     				<h2>FORM PENDAFTARAN PENGGUNA</h2>
                        <hr>
                        <div class="parent">

                            <div class="box1">
                                Nama<br>

                                <input type="text" name="nama"> <br>

                                No. Telepon <br>
                                <input type="text" name="telp"> <br>

                                Alamat Lengkap<br>
                                <textarea name="alamat">

                                </textarea>
                                <br>
																<input type="submit" name="submit" value="Daftar" class="btn btn-success">
									              <a href="index.php"><input type="button" class="btn btn-default" value="Batal" style="color: black;" ></a>
                            </div>

                            <div class="box2">
                                Email <br>
                                <input type="text" name="email"> <br>

                                Password <br>
                                <input type="password" name="password"> <br>

                                Konfirmasi Password <br>
                                <input type="password" name="confirmasi">
																<input type="hidden" name="id_pegawai" value="1"> <br>



                            </div>
     					</div>
                    </table>
<!---->
				</form>


		</div>

</body>
</html>
