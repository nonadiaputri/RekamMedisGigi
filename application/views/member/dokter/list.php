<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
       <!-- Main content -->
          <section class="content-header">
      <h1>
        Daftar Pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">List Pasien</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Nomor Pasien</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $num=1;
                  foreach($pasien->result() as $key){ ?>
                  <tr>
                    <td><?php echo $num; ?></td>
                    <td><a href="<?php echo base_url('c_dokter/ReadData/'.$key->id_pasien); ?>"><?php echo $key->nama;?> </td>
                    <td><?php echo $key->id_pasien;?></td>
                    <td><?php echo $key->tempat_lahir; ?></td>
                    <td><?php echo $key->tgl_lahir; ?></td>
                  </tr>
                  <?php $num++; } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  </body>
  </html>

 
  