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
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Compact Table</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Nomor Pasien</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
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
                            <td><?php echo $key->nomor_pasien;?></td>
                            <td><?php echo $key->tempat_lahir;?></td>
                            <td><?php echo $key->tgl_lahir;?></td>
                            <td><?php echo $key->nik;?></td>
                            <td><?php echo $key->jk;?></td>
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