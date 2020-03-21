<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div class="col-md-11">
    <h2></h2>
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">Edit Member</h3>
        </div>
          <div class="card-body">
           
            <form method="post" class="form-horizontal" action="<?php echo base_url('c_admin/update_member');?>" >
              <?php 
                foreach ($member as $key) { ?>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Nama Depan</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="firstname" value="<?php echo $key->firstname; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Nama Belakang</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="lastname" value="<?php echo $key->lastname; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Username</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="username" value="<?php echo $key->username; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="email" value="<?php echo $key->email; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Pekerjaan</label>
                      <div class="col-sm-9">
                        <select name="job" id class="form-control">
                          <option <?php if($key->job=='Doctor'){ echo "selected"; } ?>  value="Doctor">Dokter</option>
                          <option <?php if($key->job=='Nurse'){ echo "selected"; } ?> value="Nurse">Perawat</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Nomor SIP</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="no_sip" value="<?php echo $key->no_sip; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                         <select name="gender" id class="form-control">
                          <option <?php if($key->gender=='Male'){ echo "selected"; } ?>  value="Male">Laki-laki</option>
                          <option <?php if($key->gender=='Female'){ echo "selected"; } ?> value="Female">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Alamat</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="alamat" value="<?php echo $key->alamat; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Nomor Handphone</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="no_hp" value="<?php echo $key->no_hp; ?>">
                      </div>
                    </div>
                    <input type="hidden" class="form-control" name="id_staff" value="<?php echo $key->id_staff; ?>">
                    <?php } ?>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" href="<?php echo base_url('c_admin/update_member');?>">Simpan</button>
                      </div>
                    </div>
            </form>
  </div>
</div>
</div>

</body>
</html>
