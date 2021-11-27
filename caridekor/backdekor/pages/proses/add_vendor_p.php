<?php
include "../../conf/koneksi.php";
if($_POST){
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

    $q=("INSERT INTO vendor (Id_vendor,NIK,Nama,Gender,TTL,Alamat,No_Hp,No_rek) VALUES ('','".$nik."','".$nama."','".$gender."','".$convert."','".$alamat."','".$hp."','".$rek."')");
    if(!mysqli_query($k,$q)){
        die(mysqli_error($k));
    }else{
        echo '<script>alert("Vendor Telah Terdaftarkan!");
        window.location.href="../../index.php?page=vendor"</script>';
    }

}

?>