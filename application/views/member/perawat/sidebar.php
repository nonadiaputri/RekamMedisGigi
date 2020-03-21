<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/member/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $this->session->userdata('job'); ?></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url('c_perawat/index');?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>          
        </li>
        <li><a href="<?php echo base_url('c_perawat/TambahPasien');?>">
          <i class="fa fa-edit"></i> <span>Tambah Pasien</span>
          </a>          
        </li>
        </li>
        <li><a href="<?php echo base_url('c_perawat/listPasien');?>">
            <i class="fa fa-table"></i> <span>List Pasien</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>