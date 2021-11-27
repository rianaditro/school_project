
<!--content-->
<div class="content-wrapper">
<section class="content-header">
        <h1><small>Data Pemilik Dekor</small></h1>
    </section>
    <section class="content">
    <div class="box box-warning">
        <div class="box-header">
          <a href="index.php?page=proses/add_vendor" class="btn btn-primary" role="button" title="Daftar Vendor Baru"><i class="glyphicon glyphicon-plus"></i> Tambah Vendor</a>
        </div>
            <div class="box-body">
              <table id="tabel-vendor" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>No Rekening</th>
                    <th>Action Required</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include('conf/koneksi.php');
                    $q=mysqli_query($k,'SELECT * FROM vendor');
                    while ($row=mysqli_fetch_array($q)) {
                    
                    ?>

                    <tr>
                        <td><?php echo $row['Id_vendor']; ?></td>
                        <td><?php echo $row['NIK']; ?></td>
                        <td><?php echo $row['Nama']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php $date=$row['TTL']; $date2=new DateTime($date); $date3=date_format($date2,'d-m-Y'); echo $date3; ?></td>
                        <td><?php echo $row['Alamat']; ?></td>
                        <td><?php echo $row['No_Hp']; ?></td>
                        <td><?php echo $row['No_rek']; ?></td>
                        <td>
                    <a href="index.php?page=proses/edit_vendor&id=<?php echo $row['Id_vendor'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="index.php?page=proses/hapus_vendor&id=<?php echo $row['Id_vendor'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
    </div>
</section>
</div>
