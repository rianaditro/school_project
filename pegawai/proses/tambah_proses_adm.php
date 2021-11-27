<?php
include_once("../koneksi.php");
if (isset($_POST['simpan'])) {             
  $id = $_POST['id'];
  $user = $_POST['user'];
  $pass=$_POST['pass'];
  $pass2=$_POST['pass2'];
  if($pass!=$pass2){
    echo "<script>document.location='../home.php?act=tambah_adm&d=adm&s=failed'</script>";
  }else{
    $SQL = "INSERT INTO login (id_pegawai,user,pass) VALUES ('".$id."','".$user."','".$pass."')";
    $action = mysqli_query($koneksi, $SQL);
    if ($action === TRUE){
        echo "<script>document.location='../home.php?act=tampil_adm&d=adm'</script>";
    }else{
        echo "Error: " . $SQL . "<br>" . mysqli_connect_error();
  }
  }
}
?>
