<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
         
        </li>
        <li><a href="{{ route('service.index') }}"><i class="fa fa-dollar"></i> <span>Service</span></a></li>
        <li><a href="{{ route('feedback.index') }}"><i class="fa fa-comments"></i> <span>Feedback</span></a></li>
        <li><a href="{{ route('image.index') }}"><i class="fa fa-image"></i> <span>Image</span></a></li>
        <li><a href="{{ route('customer.index') }}"><i class="fa fa-user"></i> <span>Customer</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>