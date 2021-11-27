<h2>Tambah Data Pegawai</h2>
<form action="proses/tambah_proses.php" method="POST">
  <div class="form-group">
    <label>ID Pegawai</label>
    <input type="text" class="form-control" name="id" placeholder="Hanya Angka. Contoh: 12345" required>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Hanya Huruf Abjad" required>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label><br>
    <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
    <input type="radio" name="jk" value="Perempuan"> Perempuan
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Jangan Gunakan Karakter Khusus (Petik,Koma,Titik,dll)" required>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="ttl" placeholder="Tanggal Lahir Pegawai" required>
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" name="jabatan" placeholder="Hanya Huruf Abjad" required>
  </div>
  <div class="form-group">
    <label>Divisi</label>
    <select name="divisi" class="form-control">
      <option value="Produksi">Produksi</option>
      <option value="Pemasaran">Pemasaran</option>
      <option value="Keuangan">Keuangan</option>
      <option value="Kepegawaian">Kepegawaian</option>
    </select>
  </div>
  <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
</form>
</body>