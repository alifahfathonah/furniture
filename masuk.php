<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
<style>
body{


}

.prod-info-main {
    border: 1px solid #CEEFFF;
    margin-bottom: 20px;
    margin-top: 10px;
    background: #fff;
    padding: 6px;
    -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
    box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
}

.prod-info-main .product-image {
    background-color: #EBF8FE;
    display: block;
    min-height: 238px;
    overflow: hidden;
    position: relative;
    border: 1px solid #CEEFFF;
}

.prod-info-main .product-deatil {
    border-bottom: 1px solid #dfe5e9;
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative;
    background: #fff
}

.product-content .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none;
    padding-left: 0;
    margin-left: 0
}

.prod-info-main .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.prod-info-main .product-deatil span.tag1 {
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    height: 50px;
    padding: 13px 0;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 50px
}

.prod-info-main .product-deatil span.sale {
    background-color: #21c2f8
}

.prod-info-main .product-deatil span.discount {
    background-color: #71e134
}

.prod-info-main .product-deatil span.hot {
    background-color: #fa9442
}

.prod-info-main .description {
    font-size: 12.5px;
    line-height: 20px;
    padding: 10px 14px 16px 19px;
    background: #fff
}

.prod-info-main .product-info {
    padding: 11px 19px 10px 20px
}

.prod-info-main .product-info a.add-to-cart {
    color: #2f383d;
    font-size: 13px;
    padding-left: 16px
}

.prod-info-main name.a {
    padding: 5px 10px;
    margin-left: 16px
}

.product-info.smart-form .btn {
    padding: 6px 12px;
    margin-left: 12px;
    margin-top: -10px
}

.load-more-btn {
    background-color: #21c2f8;
    border-bottom: 2px solid #037ca5;
    border-radius: 2px;
    border-top: 2px solid #0cf;
    margin-top: 20px;
    padding: 9px 0;
    width: 100%
}

.product-block .product-deatil p.price-container span,
.prod-info-main .product-deatil p.price-container span,
.shipping table tbody tr td p.price-container span,
.shopping-items table tbody tr td p.price-container span {
    color: #21c2f8;
    font-family: Lato, sans-serif;
    font-size: 24px;
    line-height: 20px
}

.product-info.smart-form .rating label {
    margin-top:15px;

}

.prod-wrap .product-image span.tag2 {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.tag3 {
    position: absolute;
    top: 10px;
    right: 20px;
    width: 60px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.sale {
    background-color: #57889c;
}

.prod-wrap .product-image span.hot {
    background-color: #a90329;
}

.prod-wrap .product-image span.special {
    background-color: #3B6764;
}
.shop-btn {
    position: relative
}

.shop-btn>span {
    background: #a90329;
    display: inline-block;
    font-size: 10px;
    box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 4px 3px!important;
    text-align: center;
    line-height: normal;
    width: 19px;
    top: -7px;
    left: -7px
}

.product-deatil hr {
    padding: 0 0 5px!important
}

.product-deatil .glyphicon {
    color: #3276b1
}

.product-deatil .product-image {
    border-right: 0px solid #fff !important
}

.product-deatil .name {
    margin-top: 0;
    margin-bottom: 0
}

.product-deatil .name small {
    display: block
}

.product-deatil .name a {
    margin-left: 0
}

.product-deatil .price-container {
    font-size: 24px;
    margin: 0;
    font-weight: 300;

}

.product-deatil .price-container small {
    font-size: 12px;

}

.product-deatil .fa-2x {
    font-size: 16px!important
}

.product-deatil .fa-2x>h5 {
    font-size: 12px;
    margin: 0
}

.product-deatil .fa-2x+a,
.product-deatil .fa-2x+a+a {
    font-size: 13px
}

.product-deatil .certified {
    margin-top: 10px
}

.product-deatil .certified ul {
    padding-left: 0
}

.product-deatil .certified ul li:not(first-child) {
    margin-left: -3px
}

.product-deatil .certified ul li {
    display: inline-block;
    background-color: #f9f9f9;
    padding: 13px 19px
}

.product-deatil .certified ul li:first-child {
    border-right: none
}

.product-deatil .certified ul li a {
    text-align: left;
    font-size: 12px;
    color: #6d7a83;
    line-height: 16px;
    text-decoration: none
}

.product-deatil .certified ul li a span {
    display: block;
    color: #21c2f8;
    font-size: 13px;
    font-weight: 700;
    text-align: center
}

.product-deatil .message-text {
    width: calc(100% - 70px)
}

@media only screen and (min-width:1024px) {
    .prod-info-main div[class*=col-md-4] {
        padding-right: 0
    }
    .prod-info-main div[class*=col-md-8] {
        padding: 0 13px 0 0
    }
    .prod-wrap div[class*=col-md-5] {
        padding-right: 0
    }
    .prod-wrap div[class*=col-md-7] {
        padding: 0 13px 0 0
    }
    .prod-info-main .product-image {
        border-right: 1px solid #dfe5e9
    }
    .prod-info-main .product-info {
        position: relative
    }
}

	.bo {
		border: solid 2px black;
		padding: 20px;
    margin: 40px;
    margin-top: 10px;
	}
  hr {
    border: solid 1px black;
  }

</style>

</head>

<body>

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




<div class="bo">
    <nav style="float:right;">
                <ul >

                    HALLO <?php echo '<b>'.$username.'</b>'; ?>

                </ul>
    </nav>
  <nav>
    <h2>KATALOG PRODUK</h2>
  </nav>
  <hr>
  <?php
    include "koneksi.php";
    $halaman = @$_GET['halaman'];
    if (empty($halaman)) {
      $posisi = 0;
      $halaman = 1;
    } else {
      $posisi = ($halaman-1) * 4;
    }
    $i = $posisi + 1;
    $sql = mysqli_query($conn, "SELECT * FROM barang LIMIT $posisi, 4");

    while ($hasil = mysqli_fetch_array($sql)) {
 ?>

<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image">
						<img src="gambar/<?php echo $hasil['foto']; ?>" width='213px' height='50px'>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								<?php echo $hasil['nama_barang']; ?>
							</a>
							<a href="#">
								<span>Product Category</span>
							</a>

						</h5>
						<p class="price-container">
							<span>Rp. <?php echo $hasil['harga']; ?></span>
						</p>
						<span class="tag1"></span>
				</div>
				<div class="description">
					<p>Kode Barang : <?php echo $hasil['kode_barang']; ?> <br>
					Jenis Kayu : <?php echo $hasil['jenis_kayu']; ?> <br>
					Ukuran : <?php echo $hasil['ukuran']; ?><br>
					Warna : <?php echo $hasil['warna']; ?>
					</p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12">
              <?php
                $kode_pembeli = $_SESSION['id_pembeli'];
                $sql2 = mysqli_query($conn, "SELECT * FROM pembeli where id_pembeli=$kode_pembeli");
                while ($data = mysqli_fetch_array($sql2)) {
              ?>
              <a href="pemesanan.php?pemesanan=<?php echo $hasil['kode_barang']; ?>
                &pembeli=<?php echo $data['id_pembeli']; ?>" class="btn btn-info">Pesan Barang</a>
                <?php
                    }
                  ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<?php
    $i++;
    }
  ?>

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

    <center>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
            <!-- LINK FIRST AND PREV -->
            <?php
            if($halaman == 1){ // Jika page adalah page ke 1, maka disable link PREV
            ?>
              <li class="disabled"><a href="#">&laquo;</a></li>
            <?php
            }else{ // Jika page bukan page ke 1
              $link_prev = ($halaman > 1)? $halaman - 1 : 1;
            ?>
              <li><a href="databarang.php?halaman=<?php echo $link_prev; ?>">&laquo;</a></li>
            <?php
            }
            ?>

            <!-- LINK NUMBER -->
            <?php
            // Buat query untuk menghitung semua jumlah data
            $res = mysqli_query($conn, "SELECT * FROM barang");
            $hitung = mysqli_num_rows($res);
            $jum = $hitung / 4;
            $jumlah = ceil($jum);
            for ($i=1; $i <= $jumlah ; $i++) {
                 echo "<li><a href='index.php?halaman=$i'>".$i."</a></li>";
             }

            ?>

            <!-- LINK NEXT AND LAST -->
            <?php
            // Jika page sama dengan jumlah page, maka disable link NEXT nya
            // Artinya page tersebut adalah page terakhir
            if($halaman == $jumlah){ // Jika page terakhir
            ?>
              <li class="disabled"><a href="#">&raquo;</a></li>
            <?php
            }else{ // Jika Bukan page terakhir
              $link_next = ($halaman < $jumlah)? $halaman + 1 : $jumlah;
            ?>
              <li><a href="index.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
            <?php
            }
            ?>
          </ul>

    </nav>
    </center>

</div>

<br>
</body>
</html>
