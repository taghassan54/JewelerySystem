<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">

    <span class="brand-text text-center font-weight-light">  المجوهراتي <i class="fa fa-gem"></i> </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">@auth {{ Auth::user()->name }} @endauth</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/material" class="nav-link">
            <i class="nav-icon fas fa-cube"></i>
            <p>
              الخامات
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/category" class="nav-link">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
             الأصناف
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/caliber" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
                العيارات
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/supplier" class="nav-link">
            <i class="nav-icon fas fa-chess-queen"></i>
            <p>
                الصاغة
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/jewelry" class="nav-link">
            <i class="nav-icon fas fa-gem "></i>
            <p>
              المجوهرات
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/clients" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              العملاء
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/invoices?type=selling" class="nav-link">
            <i class="nav-icon fas fa-hand-holding-usd"></i>
            <p>
            فواتير البيع
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/invoices?type=purchase" class="nav-link">
            <i class="nav-icon fas fa-hand-holding-usd"></i>
            <p>
              فواتير الشراء
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
                التقارير
            </p>
          </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              تسجيل خروج
                          </p>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>

        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
