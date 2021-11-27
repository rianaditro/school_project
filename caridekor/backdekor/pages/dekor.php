<!--content-->
<div class="content-wrapper">
<section class="content-header">
        <h1><small>Data Dekor</small></h1>
    </section>
    <section class="content">
    <div class="box box-warning">
        <div class="box-header">
          <a href="index.php?page=proses/add_dekor" class="btn btn-primary" role="button" title="Daftar Dekor Baru"><i class="glyphicon glyphicon-plus"></i> Tambah Dekor</a>
        </div>
            <div class="box-body">
              <table id="tabel-dekor" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Tarif</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Action Required</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include('conf/koneksi.php');
                    $q=mysqli_query($k,'SELECT * FROM dekor');
                    while ($row=mysqli_fetch_array($q)) {
                    
                    ?>

         
                    <tr>
                        <td><?php echo $row['Id_dekor']; ?></td>
                        <td><?php echo $row['Nama_dekor']; ?></td>
                        <td><?php echo $row['Jenis']; ?></td>
                        <td><?php $rp="Rp ".number_format($row['Harga'],2,',','.'); echo $rp; ?></td>
                        <td><?php echo $row['Deskripsi']; ?></td>
                        <td> <img class="img-responsive img-thumbnail" src="<?php echo "../file/".$row['Foto']; ?>"></td>
                        <td><?php echo $row['Status']; ?></td>
                        <td>
                    <a href="index.php?page=proses/edit_dekor&id=<?php echo $row['Id_dekor'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                  </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
    </div>
</section>
</div>
