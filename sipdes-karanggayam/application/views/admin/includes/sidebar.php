  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard');?>" class="brand-link">
      <img src="<?php echo base_url('vendor'); ?>/dist/img/logo.png" alt="Karang Gayam Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPDes Karang Gayam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="<?php echo base_url('vendor'); ?>/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Hai! Admin </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/penduduk'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Penduduk
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Surat
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat_kelahiran'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat/lihat/kematian'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kematian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat/lihat/tdkmampu'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tidak Mampu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat/lihat/biodata'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Biodata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat/lihat/umum'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/surat/lihat/domisili'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domisili</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/pengguna'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/akun/keluar'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>