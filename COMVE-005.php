<?php
session_start();
if (isset($_SESSION["USUARIO"])) {
    $nombreCompleto = $_SESSION["USUARIO"];
} else {
    $nombreCompleto = "Invitado"; // Puedes establecer un valor predeterminado si el usuario no ha iniciado sesión
}
?>
<!-- Incluir SweetAlert2 CSS y JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.min.js"></script>


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
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Juan Guardado
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Llamame cuando puedas...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 1 Hora</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Diego Colchado
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Acabo de recibir el informe.</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 2 horas</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Daniela Arteaga
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Elabora los informes que acordamos.</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 3 horas</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todos los Mensajes</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">9</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 5 nuevos reportes
            <span class="float-right text-muted text-sm">3 días</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas las Notificaciones</a>
        </div>
      </li>
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
                      Áreas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <!-- Removed the extra <li> here -->
                    <li class="nav-item">
                    <a href="#" class="nav-link active" style="background-color: #4CAF50;">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Comercial y Ventas
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>

                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="COMVE-001.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Registros del Cliente</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-002.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Generación de Cotizaciones de Servicio</p>
                          </a>
                        </li>

                        
                        <li class="nav-item">
                        <a href="COMVE-003.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Descuentos</p>
                          </a>
                        </li>
                        
                        <li class="nav-item">
                        <a href="COMVE-004.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Registro de Ventas p/ Cotz.</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-007.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Asignación de Mod. de Pago</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-008.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Programación de Encuestas</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-005.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Historial de Ordenes de Venta</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-009.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Ordenes de Venta</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-010.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Historial de Cotizaciones</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-011.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Cotizaciones</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="COMVE-013.php" class="nav-link active" style="background-color: #c8e6c9;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Proveedores</p>
                          </a>
                        </li>

                        <!-- Add other items as needed -->

                      </ul>
                    </li>

                    <li class="nav-item">
                    <a href="#" class="nav-link active" style="background-color: #428bca">            <i class="far fa-circle nav-icon"></i>
                        <p>
                          Operaciones
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>

                      <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="OPS-001.php" class="nav-link active" style="background-color: #ADD8E6;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Ordenes de Servicio</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="OPS-005.php" class="nav-link active" style="background-color: #ADD8E6;">
                            <i class="fas fa-briefcase"></i>
                            <p>Atención a las Observaciones de los OC</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="OPS-006.php" class="nav-link active" style="background-color: #ADD8E6;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de mantenimiento de vehículos</p>
                          </a>
                        </li>

                        <!-- Add other items as needed -->

                      </ul>
                    </li>

                    <li class="nav-item">
                    <a href="#" class="nav-link active" style="background-color: #fe0000">            <i class="far fa-circle nav-icon"></i>
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Logística
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>

                      <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="LOG-001.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Vehículos e Inv.</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-002.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Asignación de Vehículos</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-003.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Generación de Ruta Opt.</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-004.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Registro de Recursos a Envío</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-005.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Almacenamiento de Muebles</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-006.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Historial de Almacenamiento</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-008.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Gestión de Devoluciones</p>
                          </a>
                        </li>

                        <li class="nav-item">
                        <a href="LOG-009.php" class="nav-link active" style="background-color: #ffdfd4;">
                            <i class="fas fa-briefcase"></i>
                            <p>Historial de Devoluciones</p>
                          </a>
                        </li>



                        <!-- Add other items as needed -->

                      </ul>
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
          </div>
          <div class="col-sm-1">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Conocenos</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Consulta del Historial de órdenes de venta</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- FILTRO PERSONALIZADO -->
          <form action="COMVE-005.php" method="post" onsubmit="saveDate()">
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                  <label>Fecha:</label>
                  <div class="input-group">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="">
                    <!-- Agrega un botón para limpiar la fecha al lado del botón "Consultar" y de color rojo -->
                    <button type="button" onclick="clearDate()" class="btn btn-danger">Limpiar fecha</button>
                  </div>
                </div>
                <div class="col-6">
                  <!-- ESPACIO PARA OTRO FILTRO -->
                </div>
              </div>
            </div>
            <!-- Agrega un campo oculto para guardar la fecha -->
            <input type="hidden" id="fecha_hidden" name="fecha_hidden" value="">
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <button id="submit" name="button" value="submit" class="btn btn-primary">Consultar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-header -->

        <?php
        // Asegúrate de que la conexión a la base de datos se ha establecido correctamente
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

        if ($mysqli->connect_error) {
          die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        include("conexion/database.php");

        $total_registros = 0;

        $fecha = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $fecha = $_POST["fecha"];
        }

        // Consulta SQL con filtro opcional
        $sql = "SELECT * FROM ordenes_de_venta";
        if (!empty($fecha)) {
          $sql .= " WHERE fecha = ?";
        }

        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
          if (!empty($fecha)) {
            $stmt->bind_param("s", $fecha);
          }

          $stmt->execute();
          $stmt->store_result();
          $total_registros = $stmt->num_rows;
          $stmt->bind_result($ID_Ordenventa, $fecha, $ID_Cliente, $Nombre_del_Cliente, $Servicio, $Producto, $Tipo_de_Venta, $Cargo, $Estado, $fechasistema);
        }
        ?>
        <style>
          table {
            width: 100%;
            border-collapse: collapse;
            background-color: #E6F7FF;
          }

          th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color: #ffffff;
          }

          th {
            background-color: #3399FF;
            color: white;
          }
        </style>
        
        <div class="card-body">
          <table id="listado" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID de Orden de Venta</th>
                <th>Fecha</th>
                <th>ID de Cliente</th>
                <th>Nombre del Cliente</th>
                <th>Servicio</th>
                <th>Producto</th>
                <th>Tipo de Venta</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Fecha de Sistema</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($total_registros > 0) {
                while ($stmt->fetch()) {
              ?>
                <tr>
                  <td><?php echo htmlspecialchars($ID_Ordenventa); ?></td>
                  <td><?php echo htmlspecialchars($fecha); ?></td>
                  <td><?php echo htmlspecialchars($ID_Cliente); ?></td>
                  <td><?php echo htmlspecialchars($Nombre_del_Cliente); ?></td>
                  <td><?php echo htmlspecialchars($Servicio); ?></td>
                  <td><?php echo htmlspecialchars($Producto); ?></td>
                  <td><?php echo htmlspecialchars($Tipo_de_Venta); ?></td>
                  <td><?php echo htmlspecialchars($Cargo); ?></td>
                  <td><?php echo htmlspecialchars($Estado); ?></td>
                  <td><?php echo htmlspecialchars($fechasistema); ?></td>
                </tr>
              <?php
                }
              } else {
                echo "<tr><td colspan=7>No existen registros</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->





    <!-- Botón para exportar con color naranja -->
    <button id="exportButton" onclick="showExportOptions()" class="btn btn-warning">Exportar</button>

    <!-- Enlace para regresar al inicio con color celeste -->
    <a href="PaginaPrincipalUsuario.php" class="btn btn-info">Regresar al inicio</a>



    
  </div>
  <!-- /.content-wrapper -->
  
  
  

  <script>
    function showExportOptions() {
      Swal.fire({
        title: "Seleccione el formato de exportación:",
        showCancelButton: true,
        confirmButtonText: "Excel",
        cancelButtonText: "PDF",
      }).then((result) => {
        if (result.isConfirmed) {
          exportToExcel();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          exportToPDF();
        }
      });
    }

    function exportToExcel() {
      var fecha = document.getElementById("fecha").value;
      var exportUrl = "COMVE-005-EXCEL.php" + (fecha ? "?fecha=" + encodeURIComponent(fecha) : "");
      window.location.href = exportUrl;
    }

    function exportToPDF() {
      var fecha = document.getElementById("fecha").value;
      var exportUrl = "COMVE-005-PDF.php" + (fecha ? "?fecha=" + encodeURIComponent(fecha) : "");
      window.location.href = exportUrl;
    }
  </script>

  <script>
    // Al cargar la página, intenta restaurar la fecha desde localStorage
    window.onload = function () {
      var fechaInput = document.getElementById("fecha");
      var fechaHidden = document.getElementById("fecha_hidden");
      var storedFecha = localStorage.getItem("selectedFecha");
      
      if (storedFecha) {
        fechaInput.value = storedFecha;
        fechaHidden.value = storedFecha;
      }
    };

    // Función para guardar la fecha en localStorage
    function saveDate() {
      var fechaInput = document.getElementById("fecha");
      var fechaHidden = document.getElementById("fecha_hidden");

      if (fechaInput.value) {
        localStorage.setItem("selectedFecha", fechaInput.value);
        fechaHidden.value = fechaInput.value;
        return true; // Permite el envío del formulario
      } else {
        alert("¿Está seguro de eliminar esta fecha?");
        return false; // Evita el envío del formulario
      }
    }

    // Función para borrar la fecha almacenada en localStorage
    function clearDate() {
      localStorage.removeItem("selectedFecha");

      // Limpia los campos de fecha en el formulario
      var fechaInput = document.getElementById("fecha");
      var fechaHidden = document.getElementById("fecha_hidden");
      fechaInput.value = "";
      fechaHidden.value = "";
    }

  </script>



  <!-- REQUIRED SCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  <!-- /REQUIRED SCRIPTS -->
</body>

</html>

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
  <div class="float-right d-none d-sm-inline">
    Pensando en ti
  </div>
  <strong>Copyright &copy; 2023 <a href=""></strong>
</footer>
</div>
<!-- ./wrapper -->