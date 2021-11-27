<?php
include "../../conf/koneksi.php";
            
            $id_dekor=$_POST['id'];
            $Nama_dekor         = $_POST['nama'];
            $Jenis              = $_POST['jenis'];
            $Harga              = $_POST['tarif'];
            $Deskripsi          = $_POST['deskripsi'];
            $foto               = $_FILES['foto']['name'];
            $file_tmp           = $_FILES['foto']['tmp_name'];  

            // Rename nama fotonya dengan menambahkan tanggal dan jam upload
            $fotobaru = date('dmYHis').$foto;
            // Set path folder tempat menyimpan fotonya
            $path = "../../../file/".$foto;  
 

            // Proses upload
            if(move_uploaded_file($file_tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
              // Proses simpan ke Database
              $query = "INSERT INTO dekor (Id_vendor, Id_dekor, Nama_dekor, Jenis,Harga,Deskripsi,Foto,Status) VALUES
              ('".$id_dekor."','".$id_dekor."', '".$Nama_dekor."', '".$Jenis."', '".$Harga."', '".$Deskripsi."', '".$foto."', 'Available' )";
              $sql = mysqli_query($k, $query); // Eksekusi/ Jalankan query dari variabel $query
              if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                echo '<script>alert("Dekor Telah Terdaftarkan!");
                window.location.href="../../index.php?page=dekor"</script>'; // Redirect ke halaman index.php     
              }else{
                // Jika Gagal, Lakukan :
                echo '<script>alert("Gagal!");
                window.location.href="../../index.php?page=dekor"</script>'; // Redirect ke halaman index.php     
              }
            }else{
              // Jika gambar gagal diupload, Lakukan :
              echo "Maaf, Gambar gagal untuk diupload.";
              echo "<br><a href='add_dekor.php'>Kembali Ke Form</a>";
            }

/*

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){          
                    move_uploaded_file($file_tmp, 'assets/img/file/'.$nama);
                    $query = mysql_query("INSERT INTO dekor (Id_dekor,Nama_dekor,Jenis,Harga,Deskripsi,Foto,Status) VALUES ('','".$id."','".$nama."','".$jenis."','".$convert."','".$deskripsi."','".$foto."','".$status."')");
                    if($query){
                        echo 'FILE BERHASIL DI UPLOAD';
                        echo '<script>alert("Dekor Telah Terdaftarkan!");
        window.location.href="../../index.php?page=dekor"</script>';
                    }else{
                        echo 'GAGAL MENGUPLOAD GAMBAR';
                    }
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
    
        
// Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Proses simpan ke Database
      $query = "INSERT INTO pelanggan VALUES('', '".$nama_pelanggan."', '".$jk_pelanggan."', '".$alamat_pelanggan."', '".$no_hp_pelanggan."', '".$username."', '".$password."', '2', '".$fotobaru."' )";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
            $_SESSION['username']       =$username;
            $_SESSION['nama_pelanggan'] =$nama_pelanggan;
        header("location: home2.php"); // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='registrasi_user.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='registrasi_user.php'>Kembali Ke Form</a>";
    }

*/
?>