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
                    <li class="active"><a href="<?php echo base_url('c_admin/index');?>"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Daftar Member </a>
                    	<ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?php echo base_url('c_admin/dokter');?>">Dokter</a></li>
                        <li><a href="<?php echo base_url('c_admin/perawat');?>">Perawat</a></li>
                      </ul>

                    </li>
                    <li><a href="<?php echo base_url('c_admin/pasien');?>"> <i class="fa fa-bar-chart"></i>Daftar Pasien </a>
                    </li>
                    
        </nav>

</body>
</html>