<?php

include_once('../koneksi.php');
$d=$_GET['id'];
$sql="DELETE FROM login WHERE id_pegawai='".$d."'";
$act=mysqli_query($koneksi,$sql);
if($act===TRUE){
    echo "<script>document.location='../home.php?act=tampil_pgw&d=all'</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_connect_error();
}
?>