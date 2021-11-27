
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <small>Tambah Vendor Baru</small>
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
            <form role="form" method="post" action="pages/proses/add_vendor_p.php">
              <div class="box-body">
                <!-- phone mask -->
              <div class="form-group">
                <label>NIK</label>
                  <input type="text" name="nik" class="form-control" pattern="[^a-zA-Z]+" placeholder="Nomor Induk Kependudukan" required>
              </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required pattern="[a-zA-Z\s]+" Title="Pakai Nama Manusia. Bukan Alien.">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-group">
                <label>
                  <input type="radio" name="gender" value='Laki-laki' class="minimal" checked>
                  Laki-laki
                </label>
                <label>
                  <input type="radio" name="gender" value='Perempuan' class="minimal">
                  Perempuan
                </label>
              </div>
                </div>
               <div class="form-group">
                <label>Tanggal Lahir</label>
                  <input type="text" name="ttl" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>No HP</label>
                  <input type="text" name="hp" class="form-control">
              </div>
               <!-- phone mask -->
              <div class="form-group">
                <label>No Rekening</label>
                  <input type="text" name="rek" class="form-control">
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

