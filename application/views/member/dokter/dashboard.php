<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/member/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $h_dokter; ?></h3>

              <p>Dokter</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-medkit"></i>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $h_perawat; ?></h3>

              <p>Perawat</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $h_pasien; ?></h3>
              <p>Pasien</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $h_tindakan; ?></h3>

              <p>Tindakan Medis</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-pulse-strong"></i>
            </div>
          </div>
        </div>
        <!-- /.col -->
      
        <!-- /.col -->
      </div>
      <?php foreach ($staff as $key) {  ?>
      <?php if ($key->no_sip=='') { ?>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#add_sip').modal('show');
        });
    </script>
    <?php
       } ?>
    <?php } ?>
    </section>

    <!-- Modal -->
  <div class="modal fade" id="add_sip" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background: #4787ef">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Isi Nomor SIP</h4>
        </div>
        <form method="POST" href="<?php echo base_url('c_dokter/addSip');?>">
        <div class="modal-body">
          <input class="form-control" name="no_sip" type="text" id="no_sip" required>
        </div>
        <div class="modal-footer" >
          <!-- <a href="<?php echo base_url('c_dokter/addSip');?>" role="button"  class="btn btn-default">Save</a> -->
          <button type="button" id="btn-tambah" class="btn btn-default">Simpan</button>

        </div>
      </form>
      </div>
    </div>
  </div>
    <script>
      $("#btn-tambah").click(function(e) {
           $.ajax({
            type: "POST",
            url: "<?php echo base_url('c_dokter/addSip');?>",
            data:{ no_sip : $('#no_sip').val() },
              dataType:'json',
            success:function(data){
                if (data.status) {
                  $('#add_sip').modal('hide');
                  $('.modal-backdrop').remove();
                }
              },
            error:function(){
              }
          });
        });
    </script>
</body>
</html>