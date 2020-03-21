  <!DOCTYPE html>
    <html>
    <head>
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
                 <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#datapasien" data-toggle="tab">Data Pasien</a></li>
                <li><a href="#ubahdt" data-toggle="tab">Ubah Data Pasien</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="datapasien">
                   <div class="table-responsive">
                    <table class="table">
                      <?php
                      foreach($pasien as $key){ ?>
                      <tr>
                        <th style="width:50%">Nama</th>
                        <td><?php echo $key->nama;?></td>
                      </tr>
                      <tr>
                        <th>Nomor Pasien</th>
                        <td><?php echo $key->id_pasien; ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Lahir</th>
                        <td><?php echo $key->tempat_lahir; ?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Lahir</th>
                        <td><?php echo $key->tgl_lahir; ?></td>
                      </tr>
                      <tr>
                        <th>NIK</th>
                        <td><?php echo $key->nik; ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $key->jk; ?></td>
                      </tr>
                      <tr>
                        <th>Suku</th>
                        <td><?php echo $key->suku; ?></td>
                      </tr>
                      <tr>
                        <th>Pekerjaan</th>
                        <td><?php echo $key->pekerjaan; ?></td>
                      </tr>
                      <tr>
                        <th>Alamat Rumah</th>
                        <td><?php echo $key->alamat; ?></td>
                      </tr>
                      <tr>
                        <th>Alamat Kantor</th>
                        <td><?php echo $key->alamat_kantor; ?></td>
                      </tr>
                      <tr>
                        <th>Nomor Telepon</th>
                        <td><?php echo $key->tlp; ?></td>
                        <?php } ?>
                      </tr>
                    </table>
                  </div>
                </div>

        <!--  -->

                <div class="tab-pane" id="ubahdt">
                  <form method="post" class="form-horizontal" action="<?php echo base_url('c_perawat/do_update');?>" >
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <?php 
                        foreach ($pasien as $key) { ?>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nomor Pasien</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="id_pasien" value="<?php echo $key->id_pasien;?>" id="id_pasien" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Tempat Lahir</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $key->tempat_lahir;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                       <input name="tgl_lahir" class="form-control" type="date" value="<?php echo $key->tgl_lahir;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">NIK</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nik" value="<?php echo $key->nik;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select name="jk" id class="form-control">
                          <option <?php if($key->jk=='laki-laki'){ echo "selected"; } ?>  value="laki-laki">Laki-laki</option>
                          <option <?php if($key->jk=='perempuan'){ echo "selected"; } ?>  value="perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Suku</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="suku" value="<?php echo $key->suku;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Pekerjaan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $key->pekerjaan;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alamat Rumah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="<?php echo $key->alamat;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alamat Kantor</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_kantor" value="<?php echo $key->alamat_kantor;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Nomor Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tlp" value="<?php echo $key->tlp;?>">
                        <?php } ?>
                      </div>
                    </div>
                    <input type="hidden" name="id_pasien" id="id_pasien" value="<?php echo $key->id_pasien;?>">
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" href="<?php echo base_url('c_perawat/do_update');?>">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
            </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->   
              <!-- /.box-body -->

            <!-- /.box -->
          
      </section>
      <!-- /.content -->
    </div>

    
    </body>
    </html>

   
    