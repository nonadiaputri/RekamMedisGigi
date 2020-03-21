  <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
         <!-- Main content -->
            <section class="content-header">
        <h1>
          Profil
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
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <div class="col-md-9">
                 <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#dataprofil" data-toggle="tab">Profil</a></li>
                <li><a href="#ubahdt" data-toggle="tab">Edit Profil</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="dataprofil">
                   <div class="table-responsive">
                    <h2>Profil</h2>
                              <!-- About Me Box -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
            
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <strong><i class="fa fa-odnoklassniki margin-r-5"></i> Nama Depan</strong>
                        <?php foreach ($karyawan as $key) { ?>

                        
                        <p class="text-muted">
                          <?php echo $key->firstname; ?>
                        </p>
                        <hr>
                        <strong><i class="fa fa-odnoklassniki margin-r-5"></i> Nama Belakang</strong>
                        <p class="text-muted">
                          <?php echo $key->lastname; ?>
                        </p>
                        <hr>
                        <strong><i class="fa fa-envelope-o margin-r-5"></i> Email</strong>
                        <p class="text-muted"><?php echo $key->email; ?></p>
                        <hr>
                        <?php } ?>
                        <strong><i class="fa fa-pencil margin-r-5"></i>Username</strong>
                        <p><?php echo $this->session->userdata('username'); ?></p>
                        <hr>
                        <strong><i class="fa fa-street-view margin-r-5"></i> Pekerjaan</strong>
                        <p><?php echo $this->session->userdata('job'); ?></p>
                        <strong><i class="fa fa-pencil margin-r-5"></i>No SIP</strong>
                        <?php 
                        foreach ($karyawan as $key) { ?>
                        <p><?php echo $key->no_sip; ?></p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i>Alamat Rumah</strong>
                        <p><?php echo $key->alamat; ?></p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i>No Handphone</strong>
                        <p><?php echo $key->no_hp; ?></p>
                        <hr>
                        <?php } ?>
                      </div>
                      <!-- /.box-body -->
          </div>
          <!-- /.box -->
                  </div>
                </div>

        <!--  -->

                <div class="tab-pane" id="ubahdt">
                  <form method="post" class="form-horizontal" action="<?php echo base_url('c_dokter/updateProfil');?>" >
                      <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Depan</label>
                      <div class="col-sm-10">
                        <?php 
                        foreach ($karyawan as $key) { ?>
                        <input type="text" class="form-control" id="nama" name="firstname" value="<?php echo $key->firstname;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Belakang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="lastname" value="<?php echo $key->lastname;?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="email" value="<?php echo $key->email;?>">
                      </div>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="username" value="<?php echo $this->session->userdata('username');?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="nama" name="job" value="<?php echo $this->session->userdata('job');?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No SIP</label>
                      <?php 
                      foreach ($karyawan as $key) { ?>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="no_sip" value="<?php echo $key->no_sip; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Rumah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="alamat" value="<?php echo $key->alamat; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Handphone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="no_hp" value="<?php echo $key->no_hp; ?>">
                      </div>
                    </div>
                    <?php } ?>
                    <input type="hidden" class="form-control" id="id" name="id_staff" value="<?php echo $this->session->userdata('id_staff');?>">
                     <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" href="<?php echo base_url('c_dokter/updateProfil');?>">Simpan</button>
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

   
