<?php
include "../../conf/koneksi.php";
if($_POST){
    $id=$_POST['id_v'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $gender=$_POST['gender'];
    $ttl=$_POST['ttl'];
    #ini buat convert tanggal
    $date=new DateTime($ttl);
    $convert=date_format($date,'Y-m-d');
    $alamat=$_POST['alamat'];
    $hp=$_POST['hp'];
    $rek=$_POST['rek'];

    $q=("UPDATE vendor SET NIK='".$nik."',Nama='".$nama."',Gender='".$gender."',TTL='".$convert."',Alamat='".$alamat."',No_Hp='".$hp."',No_rek='".$rek."' WHERE Id_vendor='".$id."' ");
    if(!mysqli_query($k,$q)){
        die(mysqli_error($k));
    }else{
        echo '<script>alert("Vendor Telah Diperbarui!");
        window.location.href="../../index.php?page=vendor"</script>';
    }

}

?>