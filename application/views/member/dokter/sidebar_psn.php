<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/member/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $this->session->userdata('job'); ?></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <?php //ambil data pasien 
          foreach ($pasien as $key ) { ?>
          <a href="<?php echo base_url('c_dokter/ReadData/'.$key->id_pasien);?>">
            <i class="fa fa-laptop"></i>
            <span>Biodata Pasien</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Edit Data Pasien</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Data Pasien</a></li>
          </ul> -->
        </li>
        
        <li><a href="<?php echo base_url('c_dokter/DataMedis/'.$key->id_pasien);?>">
            <i class="fa fa-files-o"></i>
            <!-- asli -->
            <span>Riwayat Penyakit</span></a>
        </li>
        <li><a href="<?php echo base_url('c_dokter/odontogram/'.$key->id_pasien);?>">
            <i class="fa fa-th"></i> <span>Odontogram</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li><a href="<?php echo base_url('c_dokter/DataPerawatan/'.$key->id_pasien);?>">
            <i class="fa fa-pie-chart"></i>
            <span>Perawatan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Dokumen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('c_dokter/doc_xray/'.$key->id_pasien);?>"><i class="fa fa-circle-o"></i> X-ray</a></li>
            <li><a href="<?php echo base_url('c_dokter/doc_hasil_lab/'.$key->id_pasien);?>"><i class="fa fa-circle-o"></i> Hasil Lab</a></li>
            <li><a href="<?php echo base_url('c_dokter/doc_informed/'.$key->id_pasien);?>"><i class="fa fa-circle-o"></i> Informed Consent</a></li>
            <li><a href="<?php echo base_url('c_dokter/doc_refusal/'.$key->id_pasien);?>"><i class="fa fa-circle-o"></i> Informed Refusal</a></li>
            <?php } ?>
          </ul>
        </li>
</ul>

    </section>
    <!-- /.sidebar -->
  </aside>