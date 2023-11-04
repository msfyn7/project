  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard');?>" class="brand-link">
      <img src="<?php echo base_url('vendor'); ?>/dist/img/logo2.png" alt="Nurul Islam Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TPQ Nurul Islam</span>
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
            <a href="<?php echo base_url('admin/santri'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Santri
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/guru'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Data Guru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kelas'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Data Kelas
              </p>
            </a>
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