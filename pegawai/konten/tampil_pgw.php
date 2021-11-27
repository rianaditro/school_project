    <?php
    include('koneksi.php');
    $dd=$_GET['d'];
    if(isset($dd)){
      if($dd=="pro"){
        $dh="Divisi Produksi";
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Produksi'");
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Produksi' LIMIT 3");
      }elseif ($dd=="pem"){
        $dh="Divisi Pemasaran";
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Pemasaran'"); 
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Pemasaran' LIMIT 3"); 
      }elseif($dd=='keu'){
        $dh="Divisi Keuangan";
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Keuangan'");
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Keuangan' LIMIT 3");
      }elseif($dd=='kep'){
        $dh="Divisi Kepegawaian";
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Kepegawaian'");
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE divisi='Kepegawaian' LIMIT 3");
      }elseif ($dd=='all'){
        $dh="";
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai");
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai LIMIT 3");
      }else{
        $dh="";
        $k=$dd;
        $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nama LIKE '$dd%' ");
      }
      $hitung=mysqli_num_rows($tampil);
      $bagi=$hitung/3;
    }
    $pp=$_GET['p'];
    if(isset($pp)){
      if($pp==2){
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai LIMIT 4,3");
      }else if($pp==3){
        $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai LIMIT 7,3");
      }else if ($pp=='all')
      $tampil2=mysqli_query($koneksi,"SELECT * FROM pegawai");

    }
    ?>

  <h2>Data Pegawai <?php echo $dh; ?></h2>
  <?php 
  if(isset($k)){
    echo "<h4>Pencarian berdasarkan kata kunci '".$k."'.</h4>";
  }
  ?>
  <a href='home.php?act=tambah&d=<?php echo $dd ?>' class='btn btn-success' data-toggle="tooltip" title="Tambah Data">
  <span class="glyphicon glyphicon-plus"></span></a>
  <a href='' class='btn btn-info' data-toggle="tooltip" title="Cetak Data">
  <span class="glyphicon glyphicon-print"></span></a>
  <a href='home.php?act=tampil_pgw&d=all&p=all' class='btn btn-default' data-toggle="tooltip" title="Tampilkan Semua Data">Tampilkan Semua</a>
  <br><br>
  <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>No</th>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jabatan</th>
        <th>Divisi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
        while ($q=mysqli_fetch_array($tampil2)){
            $no++;
            ?>
        <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $q['id_pegawai'];?></td>
        <td><?php echo $q['nama'];?></td>
        <td><?php echo $q['jk'];?></td>
        <td><?php echo $q['alamat'];?></td>
        <td><?php echo $q['ttl'];?></td>
        <td><?php echo $q['jabatan'];?></td>
        <td><?php echo $q['divisi'];?></td>
        <td><a href='home.php?act=edit&id=<?php echo $q['id_pegawai'];?>&d=<?php echo $dd; ?>' 
        class='btn btn-warning btn-sm' data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span></a>
        <a href='proses/hapus.php?id=<?php echo $q['id_pegawai'];?>&d=<?php echo $dd; ?>' 
        class='btn btn-danger btn-sm' data-toggle="tooltip" title="Hapus Data">
        <span class="glyphicon glyphicon-minus"></span></a></td>
        </tr>
        <?php } ?>

        
    </tbody>
  </table>
  <ul class="pagination">
        <?php 
        
        for($i=1;$i<=$bagi;$i++){ ?>
          <li <?php if($pp==$i){
            echo "class=active";
          } ?>>
          <a href="home.php?act=tampil_pgw&d=<?php echo $dd; ?>&p=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php }
        ?>
        </ul>

