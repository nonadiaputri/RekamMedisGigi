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





                          <div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="<?php echo base_url('c_login/cek_login');?>" method="post">
    <link href="<?php echo base_url();?>assets/user/css/login.css" rel="stylesheet">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="<?php echo base_url(); ?>assets/user/images/1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">LOGN</h1>
    </div>

    <div class="container">
        <div class="col-md-12">
      <input type="text" placeholder="Enter Username" name="username">
      <input type="password" placeholder="Enter Password" name="password">        
      <button type="submit">Login</button>
      <a href="<?php echo base_url('c_login/cek_login') ?>">

  </div>
</div>
  <div class="tombol">
    <div class="col-md-6">
      <input type="checkbox"> Remember me  | 
      <a href="#" >Forgot Password ?</a>    
  </div>
    </div>
</form>