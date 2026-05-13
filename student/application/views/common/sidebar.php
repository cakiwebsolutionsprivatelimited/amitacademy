<aside class="main-sidebar elevation-4 sidebar-light-info">
  <!-- Brand Logo -->
  <a href="<?=site_url();?>" class="brand-link elevation-4 navbar-info">
    <img src="<?=base_url();?>assets/dist/img/AdminLTELogo.png" alt="AMIT ERP" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AMIT ERP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=base_url();?>../erp/uploads/<?=$this->session->userdata('photo');?>" onerror="this.onerror=null;this.src='https://amitcollege.org.in/img/default-avatar.png';" class="img-circle elevation-2" alt="<?=$this->session->userdata('fullname');?>">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=$this->session->userdata('fullname');?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-compact text-sm" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="<?=site_url("dashboard");?>" class="nav-link <?=$mainmenu == 'dashboard' ? 'active' : ''?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url("dashboard/my_exams");?>" class="nav-link <?=$mainmenu == 'my_exams' ? 'active' : ''?>">
                <i class="nav-icon fas fa-table"></i>
                <p> Exams</p>
            </a>
        </li>
	
        <li class="nav-header">Profile</li>
        <li class="nav-item">
          <a href="<?=site_url('users/change_password');?>" class="nav-link">
            <i class="nav-icon fas fa-key text-warning"></i>
            <p>Change Password</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=site_url('users/logout');?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>