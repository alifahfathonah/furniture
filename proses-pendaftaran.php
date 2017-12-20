 <?php

                    include("../koneksi/db.php");

                    // cek apakah tombol daftar sudah diklik atau blum?
                    if(isset($_POST['submit'])){
                        
                        // ambil data dari formulir
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $telp = $_POST['telp'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        
                        $sql = "INSERT INTO pembeli (nama_pembeli, alamat_pembeli, telepon, email, password) VALUE ('$nama', '$alamat', '$telp', '$email', '$password')";
                        $query = mysqli_query($koneksi, $sql);
                                 
                    } else {
                        die("Akses dilarang...");
                    }

                    ?>