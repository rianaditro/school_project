<?php

include_once('../koneksi.php');
if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $user=$_POST['user'];
    $pass=$_POST['[pass]'];
    $pass2=$_POST['[pass2]'];

    if($pass!=$pass2){
        echo "<script>document.location='../home.php?act=edit_adm&d=adm&s=failed'</script>";
      }else{
        $sql="UPDATE login SET id_pegawai='".$id."',user='".$user."',pass='".$pass."' WHERE id_pegawai='".$id."'";
        $act=mysqli_query($koneksi,$sql);
        if ($act===TRUE){
            echo "<script>document.location='../home.php?act=tampil_pgw&d=all'</script>";
        } else {
            echo "Error: ". $sql . "<br>" . mysqli_connect_error();
        }
    }
}
?>