<?php
session_start();
if(isset($_SESSION['id_pembeli'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Konfirmasi</title>
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
        }

        .box2 {
            width: 400px;
            height: 400px;
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

        .konfirmasi {
            border: solid 2px solid;
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

                <!--<div class="span4">-->
                    <!--<div class="icons-box">-->
                    <table>
                        <h2>Pemesanan</h2>
                        <hr>
                        <div class="konfirmasi">
                            <h3>Konfirmasi pemesanan berhasil dikirim !</h3>
                            <p>
                                Silahkan Mentransfer dan konfirmasi ke kami, terima kasih .
                            </p>
                        </div>
                        <a href="masuk.php"><button type="button" name="button">Kembali</button></a>


                    </table>
                    </div>
                    <!--</div> -->
                <!--</div> -->
<!---->


        </div>

</body>
</html>
<?php
}else{
	header("location:login.php");
}
?>
