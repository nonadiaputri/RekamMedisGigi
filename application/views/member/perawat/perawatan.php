  <!DOCTYPE html>
    <html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <title></title>
    </head>
    <body>
         <!-- Main content -->
         <section class="content-header">
          <h1>
          Data Pasien
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-9">
                <table id="example2" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Pasien</th>
                  <th>Tanggal</th>
                  <th>Diperiksa Oleh</th>
                  <th>Action</th>
                </tr>
                </thead>
                 <tbody>
                  <?php
                  $num=1;
                  foreach($perawatan as $key){ ?>
                  <tr id="<?php echo $key->id_perawatan;?>">
                    <td><?php echo $num; ?></td>
                    <td>
                      <?php
                      foreach ($pasien as $ky) { ?>
                        <?php echo $ky->nama; ?>
                    <?php  } ?>
                    </td>
                    <td><?php echo $key->tgl;?></td>
                    <td>drg <?php echo $key->firstname; ?></td>
                    <td>
                      <a href="<?php echo base_url()?>c_dokter/ubahdt_perawatan/<?=$key->id_perawatan.'/'.$key->id_pasien;?>" class="btn btn-success" role="button">Edit</a>
                  </tr>

                  <?php $num++; } ?>

                </tbody>
                <tfoot>
                </tfoot>
              </table> 
        </div>
      </section>
      <!-- /.content -->
    </div>
   

      <!-- modal -->
      <div class="modal fade" id="lihat_perawatan" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background: #4787ef">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" align="center">Perawatan</h4>
            </div>
            <div class="modal-body">
              <table class="table" id="tabel-lihat">
                      <tr>
                        <th style="width:50%">Nama</th>
                        <td id="nama"></td>
                      </tr>
                      <tr>
                        <th>Tanggal </th>
                        <td id="tgl"></td>
                      </tr>
                      <tr>
                        <th>Keluhan</th>
                        <td id="keluhan"></td>
                      </tr>
                      <tr>
                        <th>Temuan Masalah</th>
                        <td id="temuan_masalah"></td>
                      </tr>
                      <tr>
                        <th>Gigi</th>
                        <td id="gigi"></td>
                      </tr>
                      <tr>
                        <th>Diagnosa</th>
                        <td id="diagnosa"></td>
                      </tr>
                      <tr>
                        <th>Kode ICD</th>
                        <td id="kode_icd"></td>
                      </tr>
                      <tr>
                        <th>Perawatan</th>
                        <td id="perawatan"></td>
                      </tr>
                      <tr>
                        <th>Diperiksa Oleh</th>
                        <td id="pencatat"></td>
                      </tr>
                    </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="float: center;">OK</button>
            </div>
          </div>
        </div>
      </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function () {     
    var id_perawatan;
    var icd;
    var icd1;
    var icd2;

      $('tr').on('dblclick', function(event) {
      var id_per = $(this).closest('tr').attr('id')
      $.ajax({
        url:"<?php echo base_url('c_perawat/spesific_perawatan/');?>" + id_per,
        type:"POST",
        dataType:'JSON',
        success:function(data){
          $('#lihat_perawatan').modal('show');
          $('#tabel-lihat').find('#nama').html(data.perawatan[0].nama);
          $('#tabel-lihat').find('#tgl').html(data.perawatan[0].tgl);
          $('#tabel-lihat').find('#keluhan').html(data.perawatan[0].keluhan);
          $('#tabel-lihat').find('#temuan_masalah').html(data.perawatan[0].temuan_masalah);
          $('#tabel-lihat').find('#gigi').html(data.perawatan[0].gigi);
          $('#tabel-lihat').find('#diagnosa').html(data.perawatan[0].diagnosa);
          $('#tabel-lihat').find('#kode_icd').html(data.perawatan[0].kode_icd);
          $('#tabel-lihat').find('#perawatan').html(data.perawatan[0].perawatan);
          $('#tabel-lihat').find('#pencatat').html("drg "+data.perawatan[0].firstname);
        },
        error:function(){
          alert('error ... ');
        }
      });
     });

    });
      
    </script>
    </body>
    </html>



   
    