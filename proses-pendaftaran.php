 <?php

                    include("koneksi.php");

                    // cek apakah tombol daftar sudah diklik atau blum?
                    if(isset($_POST['submit'])){

                        // ambil data dari formulir
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $telp = $_POST['telp'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $id_pegawai = $_POST['id_pegawai'];


                        $sql = "INSERT INTO pembeli (nama_pembeli, alamat_pembeli, telepon, email, password, id_pegawai) VALUE ('$nama', '$alamat', '$telp', '$email', '$password', '$id_pegawai')";
                        $query = mysqli_query($conn, $sql);
                        echo "<script language='javascript'>alert('Berhasil Mendaftar');</script>";
                  			echo '<meta http-equiv="refresh" content="0; url=login.php">';

                    } else {
                        die("Akses dilarang...");
                    }

                    ?>