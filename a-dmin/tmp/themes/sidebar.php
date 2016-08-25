<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>tmp/public/images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo Session::get('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-home" aria-hidden="true"></i> <span><?php echo lang('dashboard'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-wrench" aria-hidden="true"></i> <span><?php echo lang('settings'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i> <span><?php echo lang('menu'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span><?php echo lang('widgets'); ?></span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <span><?php echo lang('pages'); ?></span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text" aria-hidden="true"></i>
            <span><?php echo lang('post'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-file-image-o" aria-hidden="true"></i> <span><?php echo lang('media'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span><?php echo lang('contact'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-comments-o" aria-hidden="true"></i> <span><?php echo lang('comments'); ?></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i> <span><?php echo lang('administration'); ?></span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>