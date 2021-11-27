<?php
include "conf/koneksi.php";
if($_GET){
    $id=$_GET['id'];
    $q=("DELETE FROM sewa WHERE Id_sewa='".$id."' ");
    if(!mysqli_query($k,$q)){
        die(mysqli_error($k));
    }else{
        echo '<script>alert("Data Transaksi Dihapus!");
        window.location.href="index.php?page=vendor"</script>';
    }

}


?>