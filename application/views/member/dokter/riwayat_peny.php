  <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
         <!-- Main content -->
            <section class="content-header">
        <h1>
          Data Riwayat Penyakit
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
                <li class="active"><a href="#datapasien" data-toggle="tab">Data Riwayat Penyakit</a></li>
                <li><a href="#ubahdt" data-toggle="tab">Ubah Data</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="datapasien">
                   <div class="table-responsive">
                    <table class="table">
                      <?php
                      foreach ($pasien as $key) { ?>
                      <tr>
                        <th style="width:50%">Nama</th>
                        <td><?php echo $key->nama; ?></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Nomor pasien</th>
                        <td><?php echo $key->id_pasien; ?></td>
                      </tr>
                      <?php } ?>
                      <?php
                      foreach ($dt_medis as $key) { ?>
                      <tr>
                        <th>Tekanan Darah</th>
                        <td><?php echo $key->tekanan_darah; ?></td>
                      </tr>
                      
                      <tr>
                        <th>Jantung</th>
                        <td><?php echo $key->jantung; ?></td>
                      </tr>
                      <tr>
                        <th>Diabetes</th>
                        <td><?php echo $key->diabetes; ?></td>
                      </tr>
                      <tr>
                        <th>Golongan Darah</th>
                        <td><?php echo $key->gol_darah; ?></td>
                      </tr>
                      <tr>
                        <th>Hemofilia</th>
                        <td><?php echo $key->hemofilia; ?></td>
                      </tr>
                      <tr>
                        <th>Hepatitis</th>
                        <td><?php echo $key->hepatitis; ?></td>
                      </tr>
                      <tr>
                        <th>Gastring</th>
                        <td><?php echo $key->gastring; ?></td> 
                      </tr>
                      <tr>
                        <th>Alergi Obat</th>
                        <td><?php echo $key->alergi_obat; ?></td>
                      </tr>
                      <tr>
                        <th>Alergi Makanan</th>
                        <td><?php echo $key->alergi_mknan; ?></td>
                      </tr>
                      <tr>
                        <th>Penyakit Lain</th>
                        <td><?php echo $key->penyakit_lain; ?></td>
                        <?php } ?>
                      </tr>
                    </table>
                  </div>
                </div>


                <div class="tab-pane" id="ubahdt">
                  <form method="post" class="form-horizontal" action="<?php echo base_url('c_dokter/update_dtmds');?>" >
                    <?php 
                        foreach ($dt_medis as $key) { ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" >Tekanan Darah</label>
                      <div class="col-sm-10">
                        <select name="tekanan_darah"  id class="form-control">
                          <option <?php if($key->tekanan_darah=='hipertensi'){ echo "selected"; } ?>  value="hipertensi">Hipertensi</option>
                          <option <?php if($key->tekanan_darah=='hipotensi'){ echo "selected"; } ?>  value="hipotensi">Hipotensi</option>
                          <option <?php if($key->tekanan_darah=='normal'){ echo "selected"; } ?>  value="normal">Normal</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Jantung</label>

                      <div class="col-sm-10">
                       <select name="jantung" id class="form-control">
                          <option <?php if($key->jantung=='ada'){ echo "selected"; } ?>  value="ada">Ada</option>
                          <option <?php if($key->jantung=='tidak ada'){ echo "selected"; } ?> value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Diabetes</label>
                      <div class="col-sm-10">
                        <select name="diabetes" id class="form-control">
                          <option <?php if($key->diabetes=='ada'){ echo "selected"; } ?>  value="ada">Ada</option>
                          <option <?php if($key->diabetes=='tidak ada'){ echo "selected"; } ?> value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Golongan Darah</label>
                      <div class="col-sm-10">
                        <select name="gol_darah" id class="form-control">
                        <option <?php if($key->gol_darah=='A'){ echo "selected"; } ?> value="A">A</option>
                        <option <?php if($key->gol_darah=='B'){ echo "selected"; } ?> value="B">B</option>
                        <option <?php if($key->gol_darah=='AB'){ echo "selected"; } ?> value="AB">AB</option>
                        <option <?php if($key->gol_darah=='O'){ echo "selected"; } ?> value="O">O</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Hemofilia</label>
                      <div class="col-sm-10">
                        <select name="hemofilia" id class="form-control">
                          <option <?php if($key->hemofilia=='ada'){ echo "selected"; } ?>  value="ada">Ada</option>
                          <option <?php if($key->hemofilia=='tidak ada'){ echo "selected"; } ?> value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Hepatitis</label>
                      <div class="col-sm-10">
                        <select name="hepatitis" id class="form-control">
                          <option <?php if($key->hepatitis=='ada'){ echo "selected"; } ?>  value="ada">Ada</option>
                          <option <?php if($key->hepatitis=='tidak ada'){ echo "selected"; } ?> value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Gastring</label>
                      <div class="col-sm-10">
                        <select name="gastring" id class="form-control">
                          <option <?php if($key->gastring=='ada'){ echo "selected"; } ?>  value="ada">Ada</option>
                          <option <?php if($key->gastring=='tidak ada'){ echo "selected"; } ?> value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alergi Obat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alergi_obat" value="<?php echo $key->alergi_obat;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alergi Makanan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alergi_mknan" value="<?php echo $key->alergi_mknan;?>">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Penyakit Lain</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="penyakit_lain" value="<?php echo $key->penyakit_lain;?>">    
                      </div>
                    </div>                    
                    
                    <input type="hidden" name="id_dtmds" id="id_dtmds" value="<?php echo $key->id_dtmds;?>">
                    <input type="hidden" name="id_pasien" id="id_pasien" value="<?php echo $key->id_pasien;?>">
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" href="<?php echo base_url('c_dokter/update_dtmds');?>">Simpan</button>
                        <?php } ?>

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

   
