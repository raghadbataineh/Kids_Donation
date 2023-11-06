<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{asset('/assets/images/logo/logo.png')}}" alt="logo">

          <span class="brand-text font-weight-light">HopeHarbor</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{url('/images/'. session('loginimage') ) }}" class="img-circle elevation-2" alt="User Image" width="60px">
            </div>
            <div class="info">
              <h6 style="color: white">Welcome {{session('loginname')}}</h6>

            </div>
          </div>

          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('go-home') }}" class="nav-link active">
                      <i class="nav-icon fas fa-home"></i>
                      <p>website home</p>
                    </a>
                  </li>


                </ul>
              </li>

              <li class="nav-item">

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation + Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boxed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Navbar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Collapsed Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                    <p>Dashboard home</p>
                </a>
            </li>

              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/users" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                    <p>Users</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/admins" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Admins</p>
                </a>

              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/categories" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Categories

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{route('gocampaigns')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Campaigns

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/donations" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    Donations

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/kits" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Kits

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/partners" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Partners

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/payments" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                    Payments

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('pendingcampaign.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Pending Campaigns
                    
                    {{-- <span class="pendingCampaignCount">{{}}</span> --}}

                  </p>
                </a>

              </li>


              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/contactus" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                  </p>
                </a>
              </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      @if(!session('loginname'))
        {{redirect()->route('adminLogin')}}
      @endif
