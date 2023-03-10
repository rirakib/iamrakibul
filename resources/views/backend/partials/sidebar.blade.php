<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('adminn') }}"  class="brand-link {{Request::is('adminn')?'active':''}}">
      <span class="brand-text font-weight-light text-center ml-3">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rakibul Islam</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{ Request::is('adminn/service*')?'menu-open':'' }} ">
            <a href="#" class="nav-link {{Request::is('adminn/service*')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('service.create') }}" class="nav-link {{Request::is('adminn/service/create')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('service.index') }}" class="nav-link {{Request::is('adminn/service')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services List</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item {{ Request::is('adminn/setting*')?'menu-open':'' }} ">
            <a href="#" class="nav-link {{Request::is('adminn/setting*')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('header.index') }}" class="nav-link {{Request::is('adminn/setting/header')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header</p>
                </a>
              </li>


            </ul>
          </li>

        </ul>
      </nav>

    </div>

  </aside>
