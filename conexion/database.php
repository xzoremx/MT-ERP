<?php
function dbQuery($sql) {
  // Reemplace  las variables con la información requerida para conectarse a la base de datos 
  $DBHost = "127.0.0.1"; //"127.0.0.1", "localhost"
  $DBname = "h_933"; //Nombre de la base de datos
  $DBUser = "root";
  $DBPass = "";
  $connDB = mysqli_connect("$DBHost","$DBUser","$DBPass", $DBname);
  if (mysqli_connect_errno())  { 
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "<br>" . mysqli_connect_errno() . PHP_EOL;
    exit;
  }
  $result = mysqli_query($connDB, $sql);
  if (!$result)
  { 
    echo "Error: No se pudo ejecutar la sentencia sql: " . $sql;
    exit;
  }
  mysqli_close($connDB);
  
  return $result;
}

//FUNCIONES ADICIONALES
function quitar_acentos($cadena) 
{	//arregla caracteres extraños
	$search = explode(",","á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ");
  $replace = explode(",","a,e,i,o,u,n,A,E,I,O,U,N");
  $cadena= str_replace($search, $replace, $cadena);
  return $cadena;
}

?>