<?php
include "conf/koneksi.php";
if($_GET){
    $id=$_GET['id'];
    $q=("DELETE a.* , b.* FROM vendor as a , dekor as b WHERE b.Id_vendor = a.Id_vendor AND a.Id_vendor='".$id."' OR b.Id_vendor='".$id."' ");
    if(!mysqli_query($k,$q)){
        die(mysqli_error($k));
    }else{
        echo '<script>alert("Data Vendor dan dekor Dihapus!");
        window.location.href="index.php?page=vendor"</script>';
    }

}


?>