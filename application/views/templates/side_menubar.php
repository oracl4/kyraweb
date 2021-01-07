<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardSideNav">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
        </li>

        <li id="historySideTree">
          <a href="<?php echo base_url('live/') ?>">
            <i class="glyphicon glyphicon-eye-open"></i>
              <span>Live Feed</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('records/') ?>">
            <i class="fa fa-list-alt"></i>
              <span>Parking Records</span>
          </a>
        </li>

        <li id="profileSideTree">
          <a href="<?php echo base_url('users/profile/') ?>">
            <i class="fa fa-user-o"></i>
              <span>Profile</span>
          </a>
        </li>

        <li id="settingSideTree">
          <a href="<?php echo base_url('users/setting/') ?>">
            <i class="fa fa-wrench"></i>
              <span>User Settings</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('auth/logout') ?>">
            <i class="glyphicon glyphicon-log-out"></i>
              <span>Logout</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
    
  </aside>