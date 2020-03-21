<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title></title>
</head>
<body>
  <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tables</h2>
            </div>
          </header>
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Pasien            </li>
            </ul>
          </div>

  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Compact Table</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th style="width: 5%; text-align:center;">No.</th>
                            <th style="width: 35%; text-align:left;">Nama</th>
                            <th style="width: 35%; text-align:left;">Email</th>
                            <th style="width: 25%; text-align:center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $num=1;
                            foreach ($dokter as $key) { ?>
                            <tr id="<?php echo $key->id_staff;?>">
                            <td style="text-align:center;"><?php echo $num;?> </td>
                            <td><?php echo $key->fullname; ?></td>
                            <td><?php echo $key->email; ?></td>
                            <td style="text-align:center;">
                              
                              <a id="btn-del" class="btn btn-danger" role="button">Hapus</a>
                              <a href="<?php echo base_url('c_admin/ubahdt_staff/').$key->id_staff; ?>" class="btn btn-success" role="button">Edit</a>
                              <a id="btn-lihat" class="btn btn-info" role="button">Lihat</a>
                            </td>
                          </tr>
                          <?php $num++; ?>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </section>
        

          <div class="modal fade" id="lihat_staff" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background: #4787ef">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" align="center"></h4>
            </div>
            <div class="modal-body">
              <table class="table" id="tabel-lihat">
                      <tr>
                        <th>Nama Depan</th>
                        <td id="firstname"></td>
                      </tr>
                      <tr>
                        <th>Nama Belakang</th>
                        <td id="lastname"></td>
                      </tr>
                      <tr>
                        <th>Username</th>
                        <td id="username"></td>
                      </tr>
                      <tr>
                        <tr>
                        <th>Nomor SIP</th>
                        <td id="no_sip"></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td id="email"></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td id="gender"></td>
                      </tr>
                      <tr>
                        <th>Pekerjaan</th>
                        <td id="job"></td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td id="alamat"></td>
                      </tr>
                      <tr>
                        <th>Nomor Handphone</th>
                        <td id="no_hp"></td>
                      </tr>
                    </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="float: center;">OK</button>
            </div>
          </div>
        </div>
      </div>
      
      <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align: center;">Delete</h4>
            </div>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin menghapus data? </p>
              <form method="POST" action="<?php echo base_url('c_admin/hapus_dokter/')?>">
              <input type="hidden" class="form-control" name="id_staff" id="id_staff">
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Ya</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script>
  $(document).ready(function () {
    var id = <?php echo $id; ?>;

    $(".btn-info").click(function(){
    var id_staff = $(this).closest('tr').attr('id');
    console.log(id_staff);
    $.ajax({
        url:"<?php echo base_url('c_admin/perstaff/');?>" + id_staff,
        type:"POST",
        dataType:'JSON',
        success:function(data){
          $('#lihat_staff').modal('show');
          $('#firstname').html(data.mem[0].firstname);
          $('#lastname').html(data.mem[0].lastname);
          $('#username').html(data.mem[0].username);
          $('#email').html(data.mem[0].email);
          $('#gender').html(data.mem[0].gender);
          $('#job').html(data.mem[0].job);
          $('#alamat').html(data.mem[0].alamat);
          $('#no_sip').html(data.mem[0].no_sip);
          $('#no_hp').html(data.mem[0].no_hp);
          },
        error:function(){
          alert('error ... ');
        }
      });
  })

    $(".btn-danger").click(function(){
      console.log($(this).parent().parent().attr('id'));
      var id = $(this).parent().parent().attr('id');
      $("#id_staff").attr('value', id);
      $('#delete').modal('show');
    });

    });
    
</script>
</body>
</html>