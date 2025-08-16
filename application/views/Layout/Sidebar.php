<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>InicioC/PanelPrincipalC" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="QrBook logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><kbd>QrBook</kbd></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
              $bibliotecario = $this->session->userdata('nombre');
              echo "  ".$bibliotecario;
            ?>
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MODULOS</li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Prestamos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>PrestamoC/PrestamoC" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Registro de prestamos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>PrestamoC/PrestamoFC" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Prestamos finalizados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>PrestamoC/PrestamoOC" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Prestamos observados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>InventarioC/InventarioC" class="nav-link">
                  <i class="far fa-building nav-icon"></i>
                  <p>Verificacion del catalogo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Ubicacion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>UbicacionC/UbicacionC" class="nav-link">
                  <i class="far fa-paper-plane nav-icon"></i>
                  <p>Herramienta de ubicacion</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MANTENIMIENTO</li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>MantenimientoC/LibrosC" class="nav-link active bg-warning">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Libros
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>MantenimientoC/EstudiantesC" class="nav-link active bg-warning">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Estudiantes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>MantenimientoC/UsuariosC" class="nav-link active bg-warning">
              <i class="nav-icon fas fa-podcast"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>