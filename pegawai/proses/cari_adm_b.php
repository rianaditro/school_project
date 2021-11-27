<?php
include_once('koneksi.php');
if(isset($_GET['cari'])){
    if(isset($_GET['id'])){
        $gg=$_GET['id'];
        echo "<script>document.location='../home.php?act=tambah_adm&d=adm&id=$g'</script>";
    }
}
?>