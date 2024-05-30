<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
            <i class='bx bxs-home-alt-2' style='color:#ffffff' ></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/perfil.php" class="nav-link">
            <i class='bx bxs-user-check'></i>  
              <p>
                Perfil
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/estudios.php" class="nav-link">
            <i class='bx bxs-school'></i>
              <p>
                Estudios
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/informacion_personal.php" class="nav-link">
              <i class='bx bxs-comment-detail'></i>
              <p>
                Información Personal
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/trabajos_realizados.php" class="nav-link">
            <i class='bx bx-objects-vertical-center'></i>
              <p>
                Trabajos Realizados
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/experiencia.php" class="nav-link">
            <i class='bx bx-briefcase-alt'></i>
              <p>
                Experiencia Laboral
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/socialMedia.php" class="nav-link">
            <i class='bx bx-network-chart'></i>
              <p>
                Redes Sociales
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/parcial3Portafolio/views/logout.php" class="nav-link">
              <i class="nav-icon fas fa-log-out"></i>
              <i class="bx bx-log-out"></i>
              <p>
                Salir
                
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

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>