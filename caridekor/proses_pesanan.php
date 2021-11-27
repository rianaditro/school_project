<?php
session_start();
include "backdekor/conf/koneksi.php";
$tgl_pesan="2019-12-22";
$tgl_event=$_POST['tgl'];
$lokasi=$_POST['lokasi'];
$id_user=$_POST['Id_user'];
$id_dekor=$_POST['Id_dekor'];
$jenis=$_POST['jenis'];
$biaya=$_POST['biaya'];

$q="INSERT INTO sewa (Id_sewa, Tgl_pesan, Tgl_event, Lokasi, Id_user, Id_dekor, Jenis, Total_biaya, Status) 
VALUES ('','".$tgl_pesan."','".$tgl_event."','".$lokasi."','".$id_user."','".$id_dekor."','".$jenis."','".$biaya."','Transaksi Tertunda')";
if(!mysqli_query($k,$q)){
    die(mysqli_error($k));
}else{
    echo '<script>alert("Dekor telah dipesan!");
    window.location.href="invoice.php?dekor=111&user=206</script>';
    header("location:invoice.php?dekor=$id_dekor&user=$id_user");
}

?>