<!DOCTYPE html>
<html>
<head>
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
                      <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Nomor Pasien</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php 
                            $num=1;
                            foreach ($pasien as $key) { ?>  
                            
                            <td><?php echo $num; ?></td>
                            <td><?php echo $key->nama;?></td>
                            <td><?php echo $key->id_pasien;?></td>
                            <td><?php echo $key->nik;?></td>
                            <td><?php echo $key->jk;?></td>
                            <td><a href="<?php echo base_url('c_admin/ReadData/').$key->id_pasien;?>" class="btn btn-danger" role="button">Lihat</a></td>
                            <td></td>
                          </tr>
                          <?php $num++; } ?>
                    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </section>

</body>
</html>