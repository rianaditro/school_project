
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <small>Tambah Dekor Baru</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/proses/add_dekor_p.php" enctype="multipart/form-data">
              <div class="box-body">
                <!-- phone mask -->   
                <div class="form-group">
                <label>Vendor</label>
                <select name="id" class="form-control">
                <?php
                  include "conf/koneksi.php";
                  $q=("SELECT * FROM vendor LEFT JOIN dekor ON dekor.Id_vendor=vendor.Id_vendor WHERE dekor.Id_dekor IS NULL");
                  $r=mysqli_query($k,$q);
                  while ($row=mysqli_fetch_array($r)){
                    ?>
                  <option value="<?php echo $row['Id_vendor'] ?>"><?php echo $row['Nama'];?></option>
                  <?php } ?>
                </select>
              </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label>Jenis</label>
                  <input type="text" name="jenis" class="form-control" placeholder="jenis">
                </div>
                
                <div class="form-group">
                  <label>Tarif</label>
                  <input type="text" name="tarif" class="form-control" placeholder="tarif">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
                </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
              </div>
               <!-- phone mask -->
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="upload"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

