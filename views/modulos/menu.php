<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"]; ?>">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/inicio.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/perfil.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Perfil
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/Estudios.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Estudios
                
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>