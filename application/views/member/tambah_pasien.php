  <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
         <!-- Main content -->
            <section class="content-header">
        <h1>
          Tambah Pasien Baru
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">List Pasien</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
      <div class="content">
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
                      <li class="active"><a data-toggle="tab" href="#dtpasien">Data Pasien</a></li>
                      <li><a  href="#dtmds">Data Medis</a></li>
                      <li><a  href="#odontogram">Odontogram</a></li>
                    </ul>

                      <div class="tab-content" id="myTabs">
                        <div id="dtpasien" class="tab-pane fade in active">
                          <form class="form-horizontal" id="frm1">
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
                     <select name="jk" class="form-control">
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
                      <button type="submit" id="m1" class="btn btn-info">Submit</button>
                    </div>
                  </div>
                </form>
                        </div>
                        <div id="dtmds" class="tab-pane fade">
                            <form class="form-horizontal" id="frm2" >
                    <div class="form-group">    
                      <label for="inputName" class="col-sm-2 control-label" >Tekanan Darah</label>
                      <div class="col-sm-10">
                        <select name="tekanan_darah" class="form-control">
                          <option name="tekanan_darah" value="hipertensi">Hipertensi</option>
                          <option name="tekanan_darah" value="hipotensi">Hipotensi</option>
                          <option name="tekanan_darah" value="normal">Normal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jantung</label>
                      <div class="col-sm-10">
                       <select name="jantung" class="form-control">
                          <option name="jantung"  value="ada">Ada</option>
                          <option name="jantung" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Diabetes</label>
                      <div class="col-sm-10">
                        <select name="diabetes" class="form-control">
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
                        <select name="hemofilia" class="form-control">
                          <option name="hemofilia"  value="ada">Ada</option>
                          <option name="hemofilia" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Hepatitis</label>
                      <div class="col-sm-10">
                        <select name="hepatitis" class="form-control">
                          <option name="hepatitis"  value="ada">Ada</option>
                          <option name="hepatitis" value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Gastring</label>
                      <div class="col-sm-10">
                        <select name="gastring" class="form-control">
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
                    <div class="form-group">
<!--                       <label for="inputSkills" class="col-sm-2 control-label">ID Pasien</label> -->
                      <!-- <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="id_pasien" value="<?php echo $last_id_form1;?>">    
                      </div> -->
                    </div>               
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" id="m2" class="btn btn-info" >Submit</button>

                      </div>
                    </div>

                  </form>
                        </div>
                        <div id="odontogram" class="tab-pane fade">
                            <h1>Odontogram</h1>
                            <form>
                            <div class="form-group">
                              <!-- <?php print_r($this->session->all_userdata());?> -->
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        </div>
                      </div>
                    </div>
      </section>
      <!-- /.content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function(){
          $('#m1').on('click',function(){
          $.ajax({
            url:"<?php echo base_url('c_perawat/insert_pasien');?>",
            type:"POST",
            data:$('#frm1').serialize(),
            dataType:'json',
            success:function(data){
              console.log(data)
              if(data.status){
                alert('sukses');
                 //var last_id_form1 = data.insert_id});
                
              }
            },
              error:function(){
                alert('eror....');
              }
            //} 
            });
          });
        });

          $(document).ready(function(){
          $('#m2').on('click',function(){
            $.ajax({
              url:"<?php echo base_url('c_perawat/insert_pasien');?>",
              type:"POST",
              data:$('#frm2').serialize(),
              dataType:'json',
              success:function(data){
                console.log(data)
                if (data.status) {
                  alert('sukses');

                }
              },
              error:function(){
                alert('error ... ');
              }

            });

          });
        });
          

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

   
    