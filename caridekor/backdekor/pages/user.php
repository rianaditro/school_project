
<!--content-->
<div class="content-wrapper">
<section class="content-header">
        <h1><small>Data User</small></h1>
    </section>
    <section class="content">
    <div class="box box-warning">
            <div class="box-body">
              <table id="tabel-user" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>No HP</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include('conf/koneksi.php');
                    $q=mysqli_query($k,'SELECT * FROM user');
                    while ($row=mysqli_fetch_array($q)) {
                    
                    ?>

                    <tr>
                        <td><?php echo $row['Id_user']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['No_Hp']; ?></td>
                        <td>
                    <a href="index.php?page=hapus_user&id=<?php echo $row['Id_user'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
    </div>
</section>
</div>
