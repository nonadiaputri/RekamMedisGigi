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
          Dokumen Penolakan Tindakan Kedokteran (Informed Refusal)
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
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('c_perawat/upload_refusal');?>">
                          <div class="form-group">
                            <label for="pic_file">Unggah dokumen pemberian infromasi :</label>
                            <input type="file" name="doc_informed" class="form-control"  id="doc_informed">
                          </div>
                          <div class="form-group">
                            <label for="pic_file">Unggah dokumen penolakan tindakan :</label>
                            <input type="file" name="doc_refusal" class="form-control"  id="doc_refusal">
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
                        <!-- table table-bordered table-hover -->
                        <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
                          <thead>
                          <tr>
                            <th>No.</th>
                            <th>Kunjungan</th>
                            <th>Dokumen Pemberian Informasi</th>
                            <th>Dokumen Penolakan Tindakan</th>
                            <th>Action</th>
                          </tr>
                          <tbody>
                          <tr>
                            <?php $num=1; 
                            foreach ($informed_consent as $key) {?>
                            <td><?php echo $num; ?></td>
                            <td><?php echo $key->insert_at; ?></td>
                            <td><a href="<?=base_url().'assets/upload_files/'.$key->doc_inform;?>" target="_blank">
                              <img src="<?=base_url().'assets/upload_files/'.$key->doc_inform;?>" style="width:200px ; height:200px"></td>
                            <td><a href="<?=base_url().'assets/upload_files/'.$key->doc_refusal;?>" target="_blank">
                              <img src="<?=base_url().'assets/upload_files/'.$key->doc_refusal;?>" style="width:200px ; height:200px"></td>
                            <td>
                              <a href="<?php echo base_url()."c_perawat/hapus_doc_refusal/".$key->id_doc.'/'.$key->id_pasien;?>" class="btn btn-danger" role="button">Delete</a>
                            </td>
                          </tr>
                          <?php $num++; } ?>
                          </tbody>
                        </table>
                    </div>
                  </div>
            </div>
            </div>
            <hr>
          </div>
        </div>
      <!-- /.content -->
    </div>
  </div>
</section>
</body>
</html>