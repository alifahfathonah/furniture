<!-- <html>
<head>
<title>
</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<script src="js/bootstrap.min.js" type="text/css"></script>
<script src="js/jquery.min.js" type="text/css"></script>
</head>
<body>
<div id="login">
	<h3>Login Pengguna</h3>
	<fieldset>
		<form action="proses-login.php" method="POST">
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="username" style="width:320">
			</div>
			<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password" style="width:320">
			</div>
			<div class="form-group">
			<input class="btn btn-primary" type="submit" name="submit" value="login" style="margin-left:10px"><br><br>
			</div>
				<a href="index.php" style="margin-left:10px"><< Kembali</a>

</form>
</div>
</fieldset>
</div>
</body>
</html>
 -->

 <!DOCTYPE html>
<html>
<head>
  <title>Masuk sistem</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="wrapper">
  <form class="login" action="../proses-login.php" method="post">
    <p class="title">LOGIN USER</p>
    <input type="text" placeholder="Email" name="username" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password" />
    <i class="fa fa-key"></i>
    <a href="../daftar.php">Belum punya akun? DAFTAR DISINI</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Masuk</span>
    </button>
  </form>
  </p>
</div>

</body>
</html>