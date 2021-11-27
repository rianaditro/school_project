<?php
include "../../conf/koneksi.php";
if($_POST){
    $id=$_POST['id_dekor'];
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $stat=$_POST['status'];
    $tarif=$_POST['tarif'];
    $desk=$_POST['deskripsi'];
    $foto               = $_FILES['foto']['name'];
            $file_tmp           = $_FILES['foto']['tmp_name'];  

            // Set path folder tempat menyimpan fotonya
            $path = "../../../file/".$foto;  
 

            // Proses upload
            if(move_uploaded_file($file_tmp, $path)){

    $q=("UPDATE dekor SET Nama_dekor='".$nama."',Jenis='".$jenis."',Harga='".$tarif."', Deskripsi='".$desk."', Foto='".$foto."', Status='".$stat."' WHERE Id_dekor='".$id."' ");
    if(!mysqli_query($k,$q)){
        die(mysqli_error($k));
    }else{
        echo '<script>alert("Dekor Telah Diperbarui!");
        window.location.href="../../index.php?page=dekor"</script>';
    }
            }
}

?>