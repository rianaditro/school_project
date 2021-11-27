<?php
                  include "conf/koneksi.php";
                  $q=("SELECT * FROM dekor WHERE Id_dekor='".$_GET['id']."'");
                  $r=mysqli_query($k,$q);
                  $row=mysqli_fetch_array($r);
                    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <small>Edit Dekor</small>
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
            <form role="form" method="post" action="pages/proses/edit_dekor_p.php" enctype="multipart/form-data">
              <div class="box-body">
                <!-- phone mask -->   
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id_dekor" class="form-control" value="<?php echo $row['Id_dekor']; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['Nama_dekor']; ?>">
                </div>
                <div class="form-group">
                  <label>Jenis</label>
                  <input type="text" name="jenis" class="form-control" placeholder="jenis" value="<?php echo $row['Jenis']; ?>">
                </div>
                
                <div class="form-group">
                  <label>Tarif</label>
                  <input type="text" name="tarif" class="form-control" placeholder="tarif" value="<?php echo $row['Harga']; ?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="<?php echo $row['Deskripsi']; ?>">
                </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>Foto</label>
                  <input type="file" name="foto" class="form-control" value="<?php echo $row['Foto']; ?> >
              </div>
               <!-- phone mask -->
               <div class="form-group">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" placeholder="status" value="<?php echo $row['Status']; ?>">
                </div>
              
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

