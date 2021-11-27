<h2>Edit Data Pegawai</h2>
<?php
include_once('koneksi.php');
$sql=mysqli_query($koneksi,"SELECT l.id_pegawai, l.user, l.pass, p.id_pegawai, p.nama, p.jabatan, p.divisi FROM login AS l JOIN pegawai as p ON l.id_pegawai = p.id_pegawai WHERE l.id_pegawai='$_GET[id]'");
$e=mysqli_fetch_array($sql);
?>
<form action="proses/edit_proses_adm.php" method="POST">
  <div class="form-group">
    <label>ID Pegawai</label>
    <input type="text" class="form-control" name="id" value="<?php echo $e['id_pegawai']; ?>" required disabled>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $e['nama']; ?>" required disabled>
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" name="jabatan" value="<?php echo $e['jabatan']; ?>"  required disabled>
  </div>
  <div class="form-group">
    <label>Divisi</label>
    <input type="text" class="form-control" name="divisi" value="<?php echo $e['divisi']; ?>"  required disabled>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="user" placeholder="Username Baru" value="<?php echo $e['user'];?>" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass"  placeholder="Password Baru" value="<?php echo $e['pass'];?>" required>
  </div>
  <div class="form-group">
    <label>Re-Password</label>
    <input type="password" class="form-control" name="pass2"  placeholder="Password Baru" value="<?php echo $e['pass'];?>" required>
    <?php global $fail; echo $fail; ?>
  </div>
  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
</form>
</body>