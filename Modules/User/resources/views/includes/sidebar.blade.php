@php $user = auth()->user(); @endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">User Module</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="" class="d-block">
        </a>
        </div>
      </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Manage
            <i class="right fas fa-angle-left"></i>
          </p>
          </a>


          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('providers', 1)}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Food</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('providers', 2)}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Decoration</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('providers', 3)}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Photograph</p>
              </a>
            </li>
          </ul>

          </li>
          </ul>
        </nav>
      </div>

      <!-- /.sidebar -->
</aside>