<!-- SIDE BAR YANG SEBELAH KIRI -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/img/<?= $this->session->userdata('foto_profil')?>.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $data['nama']?></p>
          <?php
            $result = $this->db->get_where('user_rules', ['rule_id' => $data['rule_id']])->row_array();
          ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online ~ <?= $result['rule'];?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>
        <li class="active">
          <a href="pages/calendar.html">
            <i class="fa fa-user-circle"></i> <span>PROFILE</span>

          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hotel"></i> <span>HOTEL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Entri Data Hotel</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-subway"></i>
            <span>KERETA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Entri Data Kereta</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plane"></i>
            <span>PESAWAT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>manager/jadwal"><i class="fa fa-circle-o"></i>Entri Data Pesawat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cutlery"></i> <span>RESTAURAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i>Entri Menu Makanan</a></li>
          </ul>
        </li>

        <!--  -->



        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-o"></i> <span>GANTI AKUN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>pages"><i class="fa fa-circle-o"></i> User Biasa</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= base_url()?>auth/logout">
            <i class="fa fa-file-text"></i> <span>GENERET LAPORAN</span>

          </a>
        </li>
        <li>
          <a href="<?= base_url()?>auth/logout">
            <i class="fa fa-sign-out"></i> <span>LOGOUT</span>

          </a>
        </li>


    </section>
    <!-- /.sidebar -->
  </aside>
<!-- AKHIR SIDE BAR YANG SEBELAH KIRI -->
