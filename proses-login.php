<?php
    include 'koneksi.php';

    $username = $_POST['user_member'];
    $password = $_POST['password_member'];


    $query = mysqli_query($conn, "SELECT * FROM pembeli WHERE email='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

  echo '<meta http-equiv="refresh" content="0; url=masuk.php">';
?>
