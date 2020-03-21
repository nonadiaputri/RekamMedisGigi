<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
       <!-- Main content -->
          <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
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
              <div class="box-body">
              <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#dtmds" data-toggle="tab">Data Medis</a></li>
              <li><a href="#ubahdtmda" data-toggle="tab">Ubah Data Medis</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                  <div class="tab-content">
                <div class="active tab-pane" id="dtmds">
                   <div class="table-responsive">
                    <table class="table">
                      <?php
                      foreach($pasien as $key){ ?>
                      <tr>
                        <th style="width:50%">Nama</th>
                        <td></td>
                      </tr>
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
              </div>
              </div>
              <!-- post -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
          
      </section>

            <!-- tab panel -->
            <div class="box-body">

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
    </section>
    <!-- /.content -->
  </div>
  
  </body>
  </html>

 
  //


              <div class="tab-content">
                <div class="active tab-pane" id="perawatan">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Tanggal</th>
                  <th>Gigi</th>
                  <th>Diagnosa</th>
                  <th>Kode ICD</th>
                  <th>Perawatan</th>
                  <th>Pencatat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $num=1;
                  foreach($pasien as $key){ ?>
                  <tr>
                    <td><?php echo $num; ?></td>
                    <td><a href="<?php echo base_url('c_member/ReadData/'.$key->id_pasien); ?>"><?php echo $key->nama;?> </a></td>
                    <td><?php echo $key->tgl;?></td>
                    <td><?php echo $key->gigi; ?></td>
                    <td><?php echo $key->diagnosa; ?></td>
                    <td><?php echo $key->kode_icd; ?></td>
                    <td><?php echo $key->perawatan; ?></td>
                    <td><?php echo $key->pencatat; ?></td>
                    <td></td>
                  </tr>
                  <?php $num++; } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table> 
            </div>
          </div>


<option <?php if( $key->tekanan_darah=='Hipertensi'){echo "selected"; } ?> value='Hipertensi'>Hipertensi</option>
                         <option <?php if( $key->tekanan_darah=='Hipotensi'){echo "selected"; } ?> value='Hipotensi'>Hipotensi</option>
                         <option <?php if( $key->tekanan_darah=='Normal'){echo "selected"; } ?> value='Normal'>Normal</option> -->


                        <option <?php $key->tekanan_darah == 'Hipertensi' ? echo "selected" : "";?> value="Hipertensi">Hipertensi</option>
                          <option <?php $key->tekanan_darah == 'Hipotensi' ? echo "selected" : "";?> value="Hipotensi">Hipotensi</option>
                          <option <?php $key->tekanan_darah == 'Normal' ? echo "selected" : "";?> value="Normal">Normal</option> 




                            <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
         <!-- Main content -->
            <section class="content-header">
        <h1>Tambah Pasien Baru</h1>
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
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-9">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myLinks">
                      <li class="active"><a href="#dtpasien" data-toggle="tab">Data Pasien</a></li>
                      <li><a href="#dtmds" data-toggle="tab">Data Medis</a></li>
                      <li><a href="#odontogram" data-toggle="tab">Odontogram</a></li>
                    </ul>
                    <div class="tab-content" id="myTabs">
                      <div class="active tab-pane fade in active" id="dtpasien">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('c_perawat/insert_pasien');?>">
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">Nomor Pasien</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomor_pasien" name="nomor_pasien" placeholder="Nomor Pasien">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputExperience" class="col-sm-2 control-label">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                              </div>
                            </div>
                          <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                        </div>
                           <div class="form-group">
                          <label for="inputSkills" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                     <select name="jk" id class="form-control">
                        <option name="jk" value="laki-laki">Laki-laki</option>
                        <option name="jk" value="perempuan">Perempuan</option></select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Suku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="suku" name="suku" placeholder="Suku">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Alamat Rumah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Rumah">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Alamat Kantor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Alamat Kantor">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Nomor Telepon">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info" >Submit</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>

              <!-- /.tab-pane -->

              <div class="tab-pane fade" id="dtmds">
                <form method="post" class="form-horizontal" action="<?php echo base_url('c_perawat/insert_dtmds');?>" >
<!--                   <input type="text" value="<?php echo $last_id;?>"> -->
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label" >Tekanan Darah</label>
                      <div class="col-sm-10">
                        <select name="tekanan_darah" id class="form-control">
                          <option name="tekanan_darah" value="hipertensi">Hipertensi</option>
                          <option name="tekanan_darah" value="hipotensi">Hipotensi</option>
                          <option name="tekanan_darah" value="normal">Normal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jantung</label>
                      <div class="col-sm-10">
                       <select name="jantung" id class="form-control">
                          <option name="jantung"  value="ada">Ada</option>
                          <option name="jantung" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Diabetes</label>
                      <div class="col-sm-10">
                        <select name="diabetes" id class="form-control">
                          <option name="diabetes"  value="ada">Ada</option>
                          <option name="diabetes" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Golongan Darah</label>
                      <div class="col-sm-10">
                        <select name="gol_darah" id class="form-control">
                        <option name="gol_darah" value="A">A</option>
                        <option name="gol_darah" value="B">B</option>
                        <option name="gol_darah" value="AB">AB</option>
                        <option name="gol_darah" value="O">O</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Hemofilia</label>
                      <div class="col-sm-10">
                        <select name="hemofilia" id class="form-control">
                          <option name="hemofilia"  value="ada">Ada</option>
                          <option name="hemofilia" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Hepatitis</label>
                      <div class="col-sm-10">
                        <select name="hepatitis" id class="form-control">
                          <option name="hepatitis"  value="ada">Ada</option>
                          <option name="hepatitis" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Gastring</label>
                      <div class="col-sm-10">
                        <select name="gastring" id class="form-control">
                          <option name="gastring"  value="ada">Ada</option>
                          <option name="gastring" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alergi Obat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alergi_obat" placeholder="Alergi Obat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Alergi Makanan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alergi_mknan" placeholder="Alergi Makanan">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Penyakit Lain</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="penyakit_lain" placeholder="Penyakit Lain">    
                      </div>
                    </div>  

                    <!-- <input type="text" name="id_pasien" value="<?php echo "$last_id";?>">    -->               
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" >Submit</button>

                      </div>
                    </div>

                  </form>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane fade" id="odontogram">

                  <h2>odontogram</h2>

              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        $("#myTabs form").on('submit',function(e) {
          e.preventDefault();
          var linkHref=$(this).parents('.tab-pane').attr('id');
          $('#myLinks li')
          .find('a[href="#'+linkHref+'"]')
          .parent()
          .next()
          .find('a').tab('show')
          .attr('data-toggle','tab');
        });
  </script>
    
    </body>
    </html>

   
    