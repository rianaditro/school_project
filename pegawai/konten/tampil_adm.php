<?php
    include('koneksi.php');
    $tampil=mysqli_query($koneksi,"SELECT l.id_pegawai, l.user, l.pass, p.id_pegawai, p.nama, p.jabatan, p.divisi FROM login AS l JOIN pegawai as p ON l.id_pegawai = p.id_pegawai ");
    $dd="adm";
    ?>

  <h2>Data Admin</h2>
  <a href='home.php?act=tambah_adm&d=<?php echo $dd ?>' class='btn btn-success' data-toggle="tooltip" title="Tambah Data">
  <span class="glyphicon glyphicon-plus"></span></a>
  <br><br>
  <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>No</th>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Divisi</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
        while ($q=mysqli_fetch_array($tampil)){
            $no++;
        ?>
        <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $q['id_pegawai'];?></td>
        <td><?php echo $q['nama'];?></td>
        <td><?php echo $q['jabatan'];?></td>
        <td><?php echo $q['divisi'];?></td>
        <td><?php echo $q['user'];?></td>
        <td><input type="hidden" name="pass" value="<?php echo $q['pass'];?>" disabled></td>
        <td><a href='home.php?act=edit_adm&id=<?php echo $q['id_pegawai'];?>&d=<?php echo $dd; ?>' 
        class='btn btn-warning btn-sm' data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span></a>
        <a href='proses/hapus_adm.php?id=<?php echo $q['id_pegawai'];?>&d=<?php echo $dd; ?>' 
        class='btn btn-danger btn-sm' data-toggle="tooltip" title="Hapus Data">
        <span class="glyphicon glyphicon-minus"></span></a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>

