<?php
// Realiza la conexión a la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Incluye la biblioteca PhpSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Crear un nuevo objeto Spreadsheet
$spreadsheet = new Spreadsheet();

// Obtén la hoja de trabajo activa
$sheet = $spreadsheet->getActiveSheet();

// Establece propiedades del documento
$spreadsheet->getProperties()
    ->setCreator("Usuario")
    ->setTitle("Datos de la tabla de órdenes de venta")
    ->setSubject("Exportación de datos")
    ->setDescription("Datos exportados de la tabla de órdenes de venta");

// Agregar encabezados de columna
$columnas = array("ID de Orden de Venta", "Fecha", "ID de Cliente", "Nombre del Cliente", "Servicio", "Producto", "Tipo de Venta", "Cargo", "Estado", "Fecha de Sistema");
$columna = 'A';
foreach ($columnas as $columnaTitulo) {
    $sheet->setCellValue($columna . '1', $columnaTitulo);
    $columna++;
}

// Condicional para verificar si se proporciona una fecha en la URL
if (isset($_GET["fecha"])) {
    // Se proporciona una fecha en la URL
    $fecha = $_GET["fecha"];
    // Consulta SQL con filtro de fecha
    $sql = "SELECT * FROM ordenes_de_venta WHERE fecha = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $fecha);
        $stmt->execute();
        $stmt->store_result();
    }
} else {
    // No se proporciona una fecha en la URL, exportar todos los registros
    $sql = "SELECT * FROM ordenes_de_venta";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->execute();
        $stmt->store_result();
    }
}

// Verifica si se encontraron registros
if ($stmt->num_rows > 0) {
    $stmt->bind_result($ID_Ordenventa, $fecha, $ID_Cliente, $Nombre_del_Cliente, $Servicio, $Producto, $Tipo_de_Venta, $Cargo, $Estado, $fechasistema);

    $contadorFila = 2; // Comienza desde la segunda fila
    while ($stmt->fetch()) {
        $columna = 'A';
        $datosFila = array($ID_Ordenventa, $fecha, $ID_Cliente, $Nombre_del_Cliente, $Servicio, $Producto, $Tipo_de_Venta, $Cargo, $Estado, $fechasistema);
        foreach ($datosFila as $valor) {
            $sheet->setCellValue($columna . $contadorFila, $valor);
            $columna++;
        }
        $contadorFila++;
    }
} else {
    // No se encontraron registros
    $sheet->setCellValue('A2', 'No existen registros');
}

// Crear un objeto Writer para Excel
$writer = new Xlsx($spreadsheet);

// Establecer el nombre del archivo de descarga
$archivoNombre = "ordenes_de_venta_exportacion.xlsx";

// Encabezado HTTP para descargar el archivo Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$archivoNombre\"");

// Guardar la hoja de cálculo en la salida
$writer->save('php://output');

exit();
?>



