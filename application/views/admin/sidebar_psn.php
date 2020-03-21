<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url();?>assets/admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Hello <?php echo $this->session->userdata('username');?></h1>
              <p><?php echo $this->session->userdata('job');?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <?php //ambil data pasien 
          foreach ($pasien as $key ) { ?>
                    <li><a href="<?php echo base_url('c_admin/ReadData/'.$key->id_pasien);?>"> <i class="fa fa-bar-chart"></i>Data Pasien </a>
                    </li>
                    <li><a href="<?php echo base_url('c_admin/DataMedis/'.$key->id_pasien);?>"> <i class="fa fa-bar-chart"></i>Riwayat Penyakit </a>
                    </li>
                    <li><a href="<?php echo base_url('c_admin/pasien');?>"> <i class="fa fa-bar-chart"></i>Odontogram </a>
                    </li>
                    <li><a href="<?php echo base_url('c_admin/pasien');?>"> <i class="fa fa-bar-chart"></i>Perawatan </a>
                    </li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Dokumen </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?php echo base_url('c_admin/dokter');?>">X-ray</a></li>
                        <li><a href="<?php echo base_url('c_admin/dokter');?>">Hasil Lab</a></li>
                        <li><a href="<?php echo base_url('c_admin/dokter');?>">Informed Consent</a></li>
                        <li><a href="<?php echo base_url('c_admin/perawat');?>">Informed Refusal</a></li>
                      </ul>

                    </li>
                    
                    <?php } ?>
        </nav>

</body>
</html>