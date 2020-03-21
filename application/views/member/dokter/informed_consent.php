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
          Dokumen Persetujuan Tindakan Kedokteran (Informed Consent)
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
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-12">
                  <div class="box" style="background:#c6d7ef ">
                    <div class="box-header">
                      <div class="box-body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('c_dokter/upload_informed');?>">
                          <div class="form-group">
                            <label for="pic_file">Unggah dokumen pemberian infromasi :</label>
                            <input type="file" name="doc_informed" class="form-control"  id="doc_informed">
                          </div>
                          <div class="form-group">
                            <label for="pic_file">Unggah dokumen persetujuan tindakan :</label>
                            <input type="file" name="doc_acceptance" class="form-control"  id="doc_acceptance">
                          </div>
                          <?php 
                          foreach ($pasien as $key) { ?>
                          <input type="hidden" name="id_pasien" value="<?php echo $key->id_pasien;?>">
                          <?php } ?>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="body-box">
                <div class="row">
                  <div class="box">
                    <div class="box-header">
                      <div class="box-body">
                      <div class="col-xs-12">
                        <h3>Dokumen Pemberian Informasi</h3>
                        <hr>
                        <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th>Kunjungan</th>
                            <th>Dokumen Pemberian Informasi</th>
                            <th>Dokumen Persetujuan Tindakan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                          <tbody>
                          <tr>
                            <?php $num=1; 
                            foreach ($informed_consent as $key) {?>
                            <td><?php echo $num; ?></td>
                            <td><?php echo $key->insert_at; ?></td>
                            <td><a href="<?=base_url().'assets/upload_files/'.$key->doc_inform;?>" target="_blank"></a>
                              <img src="<?=base_url().'assets/upload_files/'.$key->doc_inform;?>" style="width:200px ; height:200px"></td>
                            <td><a href="<?=base_url().'assets/upload_files/'.$key->doc_acceptance;?>" target="_blank"></a>
                              <img src="<?=base_url().'assets/upload_files/'.$key->doc_acceptance;?>" style="width:200px ; height:200px"></td>
                            <td>
                              <a href="<?php echo base_url()."c_dokter/hapus_doc_inform/".$key->id_doc.'/'.$key->id_pasien;?>" class="btn btn-danger" role="button">Hapus</a>
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