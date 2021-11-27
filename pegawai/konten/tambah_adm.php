
<?php
     if(isset($_GET['s'])){
        if($_GET['s']=="failed"){
            $fail="Password dan Re-Password tidak cocok. Coba lagi.";
         }else{
             $fail="";
         }
    }
?>
<h2>Tambah Data Admin</h2>
  <!-- input otomatis gagal
    <form action="home.php?act=cari_adm_b&d=adm" method="get">
    <div class="form-group">
    <label>ID Pegawai</label>
    <input type="search" class="form-control" name="id" placeholder="Hanya Angka. Contoh: 12345" required value="<?php echo $g['id_pegawai'];?>">
    </div>
    <div class="form-group">
        <button type="submit" name="cari" class="btn btn-info">
        <span class="glyphicon glyphicon-search"></span></button>
    </div>
    </form> -->

  
<form action="proses/tambah_proses_adm.php" method="POST">
  <div class="form-group">
    <label>ID Pegawai</label>
    <input type="text" class="form-control" name="id" placeholder="Kopi paste id pegawai di sini" required>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="user" placeholder="Username Login" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Buat password anda" required>
  </div>
  <div class="form-group">
    <label>Re-Password</label>
    <input type="password" class="form-control" name="pass2" placeholder="Ketik ulang password" required>
    <?php global $fail; echo $fail; ?>
  </div>
  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
</form>
</body>