<?php
session_start();
if (isset($_SESSION["USUARIO"])) {
    $nombreCompleto = $_SESSION["USUARIO"];
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
              <li class="nav-item">
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                     Comercial y Ventas
                    <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="COMVE-001.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Registros del Cliente</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="COMVE-002.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Generación de Cotizaciones de servicio</p>
                        </a>
                      </li>

    		            <li class="nav-item">
                        <a href="COMVE-003.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Gestión de Descuentos y Ofertas especiales</p>
                        </a>
                      </li>

                    <li class="nav-item">
                        <a href="COMVE-004.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Registro de Ventas a partir de cotizaciones</p>
                        </a>
                      </li>

   		              

    		            <li class="nav-item">
                        <a href="COMVE-007.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Selección de la modalidad de pago</p>
                        </a>
                      </li>

                    <li class="nav-item">
                        <a href="COMVE-008.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Recopilación de Retroalimentación de Clientes</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="COMVE-005.php" class="nav-link">
                          <i class="fas fa-briefcase"></i>
                            <p>Consulta del historial de Ordenes de Venta</p>
                        </a>
                      </li>
              
                        <li class="nav-item">
                          <a href="COMVE-009.php" class="nav-link">
                              <i class="fas fa-briefcase"></i>
                                <p>Gestión del historial de Ordenes de Venta</p>
                            </a>
                        </li>

                        <li class="nav-item">
                          <a href="COMVE-010.php" class="nav-link">
                              <i class="fas fa-briefcase"></i>
                                <p>Consulta del historial de Cotizaciones</p>
                            </a>
                        </li>

                        <li class="nav-item">
                          <a href="COMVE-011.php" class="nav-link">
                              <i class="fas fa-briefcase"></i>
                                <p>Gestión del historial de Cotizaciones</p>
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
                     Operaciones
                    <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="OPS-005.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Atención a las Observaciones de los OC</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="OPS-006.php" class="nav-link">
                          <i class="fas fa-briefcase"></i>
                            <p>Gestión de Mantenimiento de Vehículos</p>
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
                     Logística
                    <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="LOG-005.php" class="nav-link active">
                          <i class="fas fa-briefcase"></i>
                            <p>Gestión de Almacenamiento de Muebles</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="LOG-006.php" class="nav-link">
                          <i class="fas fa-briefcase"></i>
                            <p>Consulta de Almacenamiento de Muebles</p>
                        </a>
                      </li>
              
                        <li class="nav-item">
                          <a href="LOG-008.php" class="nav-link">
                              <i class="fas fa-briefcase"></i>
                                <p>Gestión de Devoluciones de Muebles</p>
                            </a>
                        </li>

                        <li class="nav-item">
                          <a href="LOG-009.php" class="nav-link">
                              <i class="fas fa-briefcase"></i>
                                <p>Consulta del historial de devoluciones de Muebles</p>
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


    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Gestión del Historial de Almacenamiento de Muebles y Enseres</h1>
                </div>
                
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">

            <div class="card-header">
                <!-- FILTRO PERSONALIZADO -->
                <form action="LOG-005.php" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Fecha:</label>
                                <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>">
                            </div>
                            <div class="col-6">
                                <!-- ESPACIO PARA OTRO FILTRO -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <button id="submit" name="button" value="submit" class="btn btn-primary">Consultar</button>
                                </div>
                            </div>
                        </div>
                                        <a class="btn btn-success btn-sm" href="LOG-005-Agregar.php">
                                            <i class="fas fa-plus"></i>
                                            Agregar
                                        </a>
                    </div>
                </form>
            </div>
            <!-- /.card-header -->
          
                            <?php
                      // Asegúrate de que la conexión a la base de datos se ha establecido correctamente
                      $mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

                      if ($mysqli->connect_error) {
                          die('Error de Conexión (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
                      }

                      include("conexion/database.php");

                      $total_registros = 0;

                      $fecha = "";

                      if ($_SERVER["REQUEST_METHOD"] === "POST") {
                          $fecha = $_POST["fecha"];
                      }

                      // Consulta SQL con filtro opcional
                      $sql = "SELECT * FROM gestion_almacen";
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
                        $stmt->bind_result($ID_ME, $fecha, $ID_Cliente, $Nombre_del_Cliente, $Descripcion, $Cantidad, $Ubicacion_en_Almacen, $fecha_limite, $fechasistema);
                    }
                    ?>   
                    <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        background-color: #E6F7FF; /* Color de fondo azul claro para toda la tabla */
                    }

                    th, td {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                        background-color: #ffffff; /* Color de fondo blanco para todas las filas de datos */
                    }

                    th {
                        background-color: #3399FF; /* Color de fondo azul para los encabezados */
                        color: white; /* Color de texto blanco para los encabezados */
                    }
                </style>
               
            <div class="card-body">
                <table id="listado" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID de Muebles y Enseres</th>
                            <th>Fecha</th>
                            <th>ID de Cliente</th>
                            <th>Nombre del Cliente</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Ubicación en Almacén</th>
                            <th>Fecha Límite</th>
                            <th>Fecha de Sistema</th>
                            <th>Gestionar Almacenamiento</th>
                          </tr>
                      </thead>
                  <tbody>
                        <?php
                        if ($total_registros > 0) { //Existen datos
                            while ($stmt->fetch()) {
                                ?>
                                <tr>
                                
                                    <td><?php echo htmlspecialchars($ID_ME); ?></td>
                                    <td><?php echo htmlspecialchars($fecha); ?></td>
                                    <td><?php echo htmlspecialchars($ID_Cliente); ?></td>
                                    <td><?php echo htmlspecialchars($Nombre_del_Cliente); ?></td>
                                    <td><?php echo htmlspecialchars($Descripcion); ?></td>
                                    <td><?php echo htmlspecialchars($Cantidad); ?></td>
                                    <td><?php echo htmlspecialchars($Ubicacion_en_Almacen); ?></td>
                                    <td><?php echo htmlspecialchars($fecha_limite); ?></td>
                                    <td><?php echo htmlspecialchars($fechasistema); ?></td>
                                    <td class="text-center">
                                        
                                        <a class="btn btn-info btn-sm" href="LOG-005-Editar.php?id=<?php echo $ID_ME; ?>" onclick="return confirm('¿Seguro que deseas editar este registro?')">
                                            <i class="fas fa-pencil-alt"></i>
                                            Editar
                                        </a>

                                        <a class="btn btn-danger btn-sm" href="LOG-005-Eliminar.php?id=<?php echo $ID_ME; ?>" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                                            <i class="fas fa-trash"></i>
                                            Eliminar
                                        </a>

                                    </td>
                                </tr>
                        <?php
                            }
                        } else { //No existen datos
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
</div>
<!-- /.content-wrapper -->
                <!-- Fin de la Tabla de Registro del Cliente con estilo -->
                 
                <!-- Botones "Guardar" y "Regresar" -->
              


            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<button id="exportButton" onclick="confirmExport()">Exportar</button>
    <a href="PaginaPrincipalUsuario.php">Regresar al inicio</a>

    <script>
        function confirmExport() {
            if (confirm("¿Desea exportar el historial mostrado?")) {
                showExportOptions();
            }
        }

        function showExportOptions() {
            const exportOptions = prompt("Seleccione el formato (excel, word, pdf) y la ubicación (ordenador, drive).", "excel, ordenador");

            if (exportOptions) {
                const [format, location] = exportOptions.split(', ');

                // Lógica de exportación según el formato y la ubicación seleccionados.

                if (format === "excel") {
                    // Lógica de exportación a Excel
                } else if (format === "word") {
                    // Lógica de exportación a Word
                } else if (format === "pdf") {
                    // Lógica de exportación a PDF
                }

                if (location === "ordenador") {
                    // Lógica para descargar en el ordenador
                } else if (location === "drive") {
                    // Lógica para exportar a Google Drive u otro servicio en la nube
                }
            }
        }
    </script>


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