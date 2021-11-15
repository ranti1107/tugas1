  <aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #ead6ee; color: #000000;">
    <!-- Brand Logo -->
    <a href="{{url('Admin/beranda')}}" class="brand-link" style="background-color: #ead6ee">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin SheShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/img/ranti.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('Admin/profil')}}" class="d-block">
            @if(Auth::check())
                {{request()->user()->nama}}
            @else
                Silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a class="nav-link {{request()->is('Admin/beranda*') ? 'active' : ''}}" href="{{url('Admin/beranda')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('Admin/kategori*') ? 'active' : ''}}" href="{{url('Admin/kategori')}}">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link {{request()->is('Admin/produk*') ? 'active' : ''}}" href="{{url('Admin/produk')}}">
                    <i class="fas fa-fw fa-shopping-basket"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{request()->is('Admin/user*') ? 'active' : ''}}" href="{{url('Admin/user')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

