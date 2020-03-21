  <!DOCTYPE html>
    <html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      <title></title>
    </head>
    <body>
         <!-- Main content -->
         <section class="content-header">
          <h1>
          Dokumen Hasil Lab
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-user"></i>
            <?php 
            foreach ($pasien as $key) {
              echo $key->nama; ?>
            </a></li>
          <li>nomor pasien : <?php echo $key->id_pasien; ?></a></li>
          <?php } ?>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-12">
                  <div class="box" style="background:#c6d7ef ">
                    <div class="box-header">
                      <div class="box-body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('c_dokter/upload_lab');?>">
                          <div class="form-group">
                            <label for="pic_file">Pilih File Hasil Lab:</label>
                            <input type="file" name="file" class="form-control"  id="file">
                          </div>
                          <?php foreach ($pasien as $key) { ?>
                          <input type="hidden" name="id_pasien" value="<?php echo $key->id_pasien; ?>">
                          <input type="hidden" name="jenis" value="hasil_lab">
                          <?php } ?>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- <div class="box-body">
                <div class="row">
                <div class="col-md-9">
                  <?php echo form_open_multipart('c_dokter/upload_xray');?>
                  <h3>Dokumen X-ray</h3>
                  <hr>
                  <div class="form-group">
                    <label for="pic_file">Pilih File:</label>
                    <input type="file" name="file" class="form-control"  id="file">
                  </div>
                  <?php foreach ($pasien as $key) { ?>
                  <input type="hidden" name="id_pasien" value="<?php echo $key->id_pasien; ?>">
                  <input type="hidden" name="jenis" value="xray">
                  <?php } ?>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div> -->

            <!-- <div class="row" style="padding-top:20px;padding-bottom:20px;padding-left: 20px;padding-right: 20px">
              <h3>Dokumentasi</h3>
              <hr>
            </div>

              <div class="row" style="padding-top:20px;padding-bottom:20px;padding-left: 20px;padding-right: 20px">
              <?php
              foreach ($xray as $key) { ?>
              <div class="col-md-4">
              <div class="thumbnail">
                <a href="<?=base_url().'assets/foto_medis/'.$key->nama_foto;?>" target="_blank">
                  <img src="<?=base_url().'assets/foto_medis/'.$key->nama_foto;?>" style="width:200px ; height:200px">
                  <div class="caption">
                    <p align="center"><?php echo $key->insert_at; ?></p>
                  </div>
                </a>
              </div>
            </div>
              <?php } ?>
            </div>
            <hr>
          </div>
        </div> -->
        <div class="body-box">
                <div class="row">
                  <div class="box">
                    <div class="box-header">
                      <div class="box-body">
                      <div class="col-xs-12">
                        <h3>Dokumen Hasil Laboraturium</h3>
                        <hr>
                        <table id="example2" class="table table-bordered" style="width: 100%;">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th>Kunjungan</th>
                            <th>Hasil Laboraturium</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                          <tbody>
                          <tr>
                            <?php $num=1; 
                            foreach ($lab as $key) {?>
                            <td><?php echo $num; ?></td>
                            <td><?php echo $key->insert_at; ?></td>
                            <td><a href="<?=base_url().'assets/foto_medis/'.$key->nama_foto;?>" target="_blank"></a>
                              <img src="<?=base_url().'assets/foto_medis/'.$key->nama_foto;?>" target="_blank" style="width:200px ; height:200px"></td>
                            <td>
                              <a href="<?php echo base_url()."c_dokter/hapus_hasil_lab/".$key->id_foto.'/'.$key->id_pasien;?>" class="btn btn-danger" role="button">Hapus</a>
                            </td>
                          </tr>
                        </tbody>
                          <?php $num++; } ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
            <hr>
            

      <!-- /.content -->
    </div>
  </div>
</section>
    </body>
    </html>