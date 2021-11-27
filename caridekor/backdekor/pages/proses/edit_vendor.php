<?php
$q=mysqli_query($k,"SELECT * FROM vendor WHERE Id_vendor='".$_GET['id']."'");
$row=mysqli_fetch_array($q);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <small>Edit Vendor</small>
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
            <form role="form" method="post" action="pages/proses/edit_vendor_p.php">
              <div class="box-body">
                <!-- phone mask -->
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id_v" class="form-control" value="<?php echo $row['Id_vendor']; ?>" readonly required>
                </div>
              <div class="form-group">
                <label>NIK</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="nik" class="form-control" value="<?php echo $row['NIK']; ?>" pattern="[^a-zA-Z]+" placeholder="Nomor Induk Kependudukan" required>
                </div>
              </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $row['Nama']; ?>" placeholder="Nama" required pattern="[a-zA-Z\s]+" Title="Pakai Nama Manusia. Bukan Alien.">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-group">
                      <?php
                      $kelamin=$row['Gender'];
                      if($kelamin=="Laki-Laki"){
                          $L="checked";
                          $P="";
                      }else{
                          $L="";
                          $P="checked";
                      }?>
                <label>
                  <input type="radio" name="gender" value='Laki-Laki' class="minimal" <?php echo $L; ?>>
                  Laki-laki
                </label>
                <label>
                  <input type="radio" name="gender" value='Perempuan' <?php echo $P; ?> class="minimal">
                  Perempuan
                </label>
              </div>
                </div>
               <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" value="<?php $date=$row['TTL']; $date2=new DateTime($date); $date3=date_format($date2,'d-m-Y'); echo $date3 ?>" name="ttl" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>" class="form-control" placeholder="Alamat" required>
                </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>No HP</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" value="<?php echo $row['No_Hp']; ?>" name="hp" class="form-control" required>
                </div>
              </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>No Rekening</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" value="<?php echo $row['No_rek']; ?>" name="rek" class="form-control" required>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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

