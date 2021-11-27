<?php

include_once('../koneksi.php');
if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $jabatan=$_POST['jabatan'];
    $divisi=$_POST['divisi'];
    $sql="UPDATE pegawai SET id_pegawai='".$id."',nama='".$nama."',jk='".$jk."',alamat='".$alamat."',ttl='".$ttl."',jabatan='".$jabatan."',divisi='".$divisi."' WHERE id_pegawai='".$id."'";
    $act=mysqli_query($koneksi,$sql);
    if ($act===TRUE){
        echo "<script>document.location='../home.php?act=tampil_pgw&d=all'</script>";
    } else {
        echo "Error: ". $sql . "<br>" . mysqli_connect_error();
    }
}

?>