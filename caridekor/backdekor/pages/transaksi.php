<!--content-->
<div class="content-wrapper">
<section class="content-header">
        <h1><small>Data Transaksi </small></h1>
    </section>
    <section class="content">
    <div class="box box-warning">
        <div class="box-header">
        </div>
            <div class="box-body">
              <table id="tabel-transaksi" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Pesanan</th>
                    <th>Tanggal Event</th>
                    <th>Dekor</th>
                    <th>Lokasi</th>
                    <th>Jenis</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th>Action Required</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include('conf/koneksi.php');
                    $q=mysqli_query($k,'SELECT sewa.* , dekor.Nama_dekor FROM sewa JOIN dekor ON sewa.Id_dekor=dekor.Id_dekor');
                    while ($row=mysqli_fetch_array($q)) {
                    
                    ?>

                    <tr>
                        <td><?php echo $row['Id_sewa']; ?></td>
                        <td><?php echo $row['Tgl_pesan']; ?></td>
                        <td><?php echo $row['Tgl_event']; ?></td>
                        <td><?php echo $row['Nama_dekor']; ?></td>
                        <td><?php echo $row['Lokasi']; ?></td>
                        <td><?php echo $row['Jenis']; ?></td>
                        <td><?php $rp="Rp ".number_format($row['Total_biaya'],2,',','.'); echo $rp; ?></td>
                        <td><?php echo $row['Status']; ?></td>
                        <td>
                    <a href="index.php?page=proses/hapus_transaksi&id=<?php echo $row['Id_sewa'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
    </div>
</section>
</div>
