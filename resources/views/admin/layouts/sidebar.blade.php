  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backEnd/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Bim Boomestoe</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Administrator</a>
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
        <li class="header">MAIN NAVIGATION</li>
        <li class="dashboard"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Manajemen Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
            <li><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Pengguna</a></li>
          </ul>
        </li>
        {{-- menu Manajemen Berita --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Manajemen Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-edit"></i> Artikel</a></li>
            <li><a href="{{route('berita.index')}}"><i class="fa fa-edit"></i> Berita Utama</a></li>
            <li><a href="{{ route('kategori.index') }}"><i class="fa fa-edit"></i> Kategori</a></li>            
            <li><a href="{{ route('tag.index') }}"><i class="fa fa-edit"></i> Tag</a></li>
          </ul>
        </li>

        {{-- menu Manajemen Galeri --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-camera"></i> <span>Manajemen Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('galeri.index') }}"><i class="fa fa-image"></i> Album</a></li>
            <li><a href=""><i class="fa fa-file-image-o"></i> Gambar</a></li>
            <li><a href="{{ route('slider.index') }}"><i class="fa fa-caret-square-o-right"></i> Slider</a></li>
          </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>