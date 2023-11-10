
<?php
session_start();
include("conexion/database.php");

if(isset($_POST["correo"]) && isset($_POST["clave"]) ){
  $correo = $_POST["correo"];
  $clave = $_POST["clave"];
  $sql = "Select * From usuario Where correo='$correo' and clave = '$clave' and estado='A'";
  //echo("<br />".$sql);
  //exit(0);
  $result = dbQuery($sql);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0 ) 
  { $row = mysqli_fetch_array($result, MYSQLI_BOTH);   
    $ID_Usuario = $row["ID_Usuario"];
    $_SESSION["ID_USUARIO"] = $ID_Usuario; 
    $_SESSION["USUARIO"] = $row["nombre"]." ".$row["apellido"];	
    //exit($_SESSION["cliente"]);
    echo "<script language='JavaScript'>";
    echo "window.location.href='PaginaPrincipalUsuario.php';";
    echo "</script>";

  }
  else
  { 	echo '<script language="JavaScript">';
      echo 'alert("La información registrada no es valida");';
      echo '</script>';
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mudanzas Top | Log in </title>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <!-- Custom styles for this template -->
  <link href="dist2/css/style.css" rel="stylesheet" />

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- dist/css/colores.light.css -->

</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="PaginaPrincipalUsuario.php" class="h1"><b>Mudanzas</b>TOP</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Complete para ingresar</p>

      <form action="Login-Usuario.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="clave">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="recordar">
              <label for="remember">
                Guardar inicio de sesión
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="ForgotPasword.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="Register.html" class="text-center">Registrate</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
