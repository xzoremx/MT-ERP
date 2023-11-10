<?php
session_start();
if (isset($_SESSION["CLIENTE"])) {
    $nombreCompleto = $_SESSION["CLIENTE"];
} else {
    $nombreCompleto = "Invitado"; // Puedes establecer un valor predeterminado si el usuario no ha iniciado sesión
}
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mudanzas Top | Log in </title>
  
  <!-- CSS -->
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <!-- Theme style Colores modificados -->
  <link rel="stylesheet" href="dist/css/colores.page.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index-LP.html" class="nav-link">Home</a>
      </li>

      <!-- Agregar un elemento de lista para mostrar el nombre del cliente -->
        <li class="nav-item d-none d-sm-inline-block">
          <span class="nav-link">Bienvenido: <?php echo $nombreCompleto; ?></span>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index-LP.html" class="brand-link">
      <span class="brand-text font-weight-light">Mudanzas Top</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/vacio.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombreCompleto; ?></a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Funciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                     Ultima Orden de Compra
                    <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="OPS-002.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Consultar</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="OPS-003.php" class="nav-link">
                          <i class="fas fa-briefcase"></i>
                            <p>Modificar</p>
                        </a>
                      </li>
              
                    </ul>
                </li>
              </li>

              <li class="nav-item">
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                     Historial de Ordenes de Compra
                    <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="OPS-004.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Consulta</p>
                        </a>
                      </li>

                    </ul>
                </li>
              </li>
              
              
            

            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Extra Pages
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-12">
            <h1 class="m-0">MUDANZAS TOP</h1>
          </div><!-- /.col -->
          <div class="col-sm-1">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Conocenos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            

            <!--Primer card-->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bienvenido:</h5>

                <p class="card-text">
                  Si lo deseas modifica tu ultima orden de Compra si lo deseas<br>
                  No hay cargos adicionales<br>
                </p>
                <a href="#" class="card-link"></a>
              </div>
            </div><!-- /.card -->
          
            <!--Segunda card-->
          <div class="card">
              <div class="card-body">
                
                <img src="images/aa.png" alt="ERP" width="350" height="350">


                <a href="#" class="card-link"></a>
              </div>
            </div><!-- /.card -->

           <!-- Tercera card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información de Contacto:</h5>
              
                <div style="display: flex; justify-content: center; align-items: center; height: 200px;">
                  <li><strong>Dirección:</strong> Av. Venezuela 159</li>
                  <li><strong>Teléfono:</strong> +01 956219987</li>
                  <li><strong>Correo Electrónico:</strong> mudanzastop@gmail.com</li>
                  <li><strong>Horario de Atención:</strong> Lunes a Domingo de 8 a.m a 11 p.m </li>
                </div>
                
              
              <a href="#" class="card-link"></a>
             </div>
           </div><!-- /.card -->

           </div>
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Pensando en ti
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="">
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
