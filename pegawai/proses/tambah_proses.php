<?php
include_once("../koneksi.php");
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $ttl = $_POST['ttl'];
  $jabatan = $_POST['jabatan'];
  $divisi=$_POST['divisi'];
  $SQL = "INSERT INTO pegawai (id_pegawai,nama,jk,alamat,ttl,jabatan,divisi) VALUES ('".$id."','".$nama."','".$jk."','".$alamat."','".$ttl."','".$jabatan."','".$divisi."')";
  $action = mysqli_query($koneksi, $SQL);
  if ($action === TRUE){
    echo "<script>document.location='../home.php?act=tampil_pgw&d=all'</script>";
  }else{
    echo "Error: " . $SQL . "<br>" . mysqli_connect_error();
  }
}
?>
