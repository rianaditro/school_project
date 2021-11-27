<h2>Edit Data Pegawai</h2>
<?php
include_once('koneksi.php');
$sql=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
$e=mysqli_fetch_array($sql);
?>
<form action="proses/edit_proses.php" method="POST">
  <div class="form-group">
    <label>ID Pegawai</label>
    <input type="text" class="form-control" name="id" value="<?php echo $e['id_pegawai']; ?>" required>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $e['nama']; ?>" placeholder="Nama Pegawai" required>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label><br>
    <?php  
    if($e['jk']=="Laki-laki"){
        $l="checked";
        $p="";
    } else {
        $p="checked";
        $l="";
    }
    ?>
    <input type="radio" name="jk" <?php echo $l; ?> value="Laki-laki"> Laki-laki <br>
    <input type="radio" name="jk" <?php echo $p; ?> value="Perempuan"> Perempuan
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $e['alamat']; ?>" placeholder="Alamat Pegawai" required>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="ttl" value="<?php echo $e['ttl']; ?>" placeholder="Tanggal Lahir Pegawai" required>
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" name="jabatan" value="<?php echo $e['jabatan']; ?>" placeholder="Jabatan Pegawai" required>
  </div>
<?php
if($e['divisi']=="Produksi"){
    $p="selected";
    $m="";
    $k="";
    $kp="";
}else if ($e['divisi']=="Pemasaran"){
    $p="";
    $m="selected";
    $k="";
    $kp="";
}else if ($e['divisi']=="Keuangan"){
    $p="";
    $m="";
    $k="selected";
    $kp="";
}else{
  $p="";
  $m="";
  $k="";
  $kp="selected";
}
?>
  <div class="form-group">
    <label>Divisi</label>
    <select name="divisi" class="form-control">
      <option value="Produksi" <?php echo $p ?> >Produksi</option>
      <option value="Pemasaran" <?php echo $m ?> >Pemasaran</option>
      <option value="Keuangan" <?php echo $k ?>>Keuangan</option>
      <option value="Kepegawaian" <?php echo $kp ?>>Kepegawaian</option>
    </select>
  </div>
  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
</form>
</body>