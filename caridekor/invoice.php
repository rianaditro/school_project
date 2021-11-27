<?php
session_start();
if(isset($_GET['dekor'])){
  $dekor=$_GET['dekor'];
  $user=$_GET['user'];
  include "backdekor/conf/koneksi.php";
  $q="SELECT * FROM dekor JOIN vendor ON dekor.Id_vendor=vendor.Id_vendor WHERE dekor.Id_vendor='".$dekor."'";
  $p="SELECT * FROM sewa WHERE Id_user='".$user."'";
  $r1=mysqli_query($k,$q);
  $r2=mysqli_query($k,$p);
  $row1=mysqli_fetch_array($r1);
  $row2=mysqli_fetch_array($r2);
}
?>
<body onload="window.print();">
<div class="wrapper">

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>caridekor.com
            <small class="pull-right">Date: <script>document.write(new Date().getdate());</script></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>caridekor.com</strong><br>
            Phone: 085330794639<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?php echo $user; ?></strong><br>
            <?php echo $row2['Lokasi']; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice <?php echo $row2['Id_sewa']; ?></b><br>
          <br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Tanggal Event</th>
              <th>Nama Dekor</th>
              <th>Nomor Rekening</th>
              <th>Tarif Sewa</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $row2['Tgl_event']; ?></td>
              <td><?php echo $row1['Nama_dekor']; ?></td>
              <td><?php echo $row1['No_rek']; ?></td>
              <td><?php $rp="Rp ".number_format($row1['Harga'],2,',','.'); echo $rp; ?></td>
              <td><?php $rp="Rp ".number_format($row1['Harga'],2,',','.'); echo $rp; ?></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="backdekor/dist/img/credit/visa.png" alt="Visa">
          <img src="backdekor/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="backdekor/dist/img/credit/american-express.png" alt="American Express">
          <img src="backdekor/dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Setelah Transfer harap menghubungi Admin maupun Vendor bersangkutan untuk konfirmasi lebih lanjut.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Jatuh Tempo <?php echo $row2['Tgl_event']; ?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><?php $rp="Rp ".number_format($row1['Harga'],2,',','.'); echo $rp; ?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td><?php $rp="Rp ".number_format($row1['Harga'],2,',','.'); echo $rp; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content --> 
    </div>
<!-- ./wrapper -->
</body>
    
 