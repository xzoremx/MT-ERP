<?php
// Realiza la conexión a la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

require_once 'libreria/fpdf/fpdf.php';

// Crear una instancia del objeto $pdf
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);
$pdf->SetTitle("Historial de ordenes de venta");

// Agregar el título
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(190, 10, utf8_decode('Historial de Órdenes de Venta'), 0, 1, 'C');

// Agregar el nombre de la empresa
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(180, 13, 'Mudanzas TOP', 0, 1, 'C');

// Agregar el teléfono
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 10, utf8_decode('Teléfono del Área de Ventas: +01 956551127'), 0, 1, 'L');

// Agregar el correo
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 10, utf8_decode('Correo: MTareaventas@gmail.com'), 0, 1, 'L');

// Agregar la dirección
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 10, utf8_decode('Dirección: Av. Universitaria 115'), 0, 1, 'L');

// Ajustar el grosor de las líneas de la tabla
$pdf->SetLineWidth(0.3); // Grosor de línea 0.3mm

// Ajustar ancho de las columnas y tamaño de fuente
$pdf->SetFont('Arial', 'B', 10); // Tamaño de fuente más grande
$pdf->Cell(15, 10, 'ID', 'TB', 0, 'C'); // Línea superior y borde inferior
$pdf->Cell(15, 10, 'Fecha', 'TB', 0, 'C');
$pdf->Cell(20, 10, 'ID Cliente', 'TB', 0, 'C');
$pdf->Cell(35, 10, 'Nombre del Cliente', 'TB', 0, 'C'); // Ajusta el ancho según tus necesidades
$pdf->Cell(20, 10, 'Servicio', 'TB', 0, 'C');
$pdf->Cell(30, 10, 'Producto', 'TB', 0, 'C');
$pdf->Cell(30, 10, 'Tipo de Venta', 'TB', 0, 'C');
$pdf->Cell(15, 10, 'Cargo', 'TB', 0, 'C');
$pdf->Cell(15, 10, 'Estado', 'TB', 1, 'C'); // Línea superior, borde inferior y nueva fila

// Consulta SQL
if (isset($_GET["fecha"])) {
    $fecha = $_GET["fecha"];
    $sql = "SELECT * FROM ordenes_de_venta WHERE fecha = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $fecha);
        $stmt->execute();
        $result = $stmt->get_result(); // Obtener el resultado de la consulta
    }
} else {
    $sql = "SELECT * FROM ordenes_de_venta";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("Error en la consulta: " . $mysqli->error);
    }
}

if ($result->num_rows > 0) {
    $pdf->SetLineWidth(0.2); // Restablecer el grosor de línea a 0.2mm para datos
    $pdf->SetFont('Arial', '', 10); // Tamaño de fuente más pequeño para datos
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(15, 10, $row['ID_Ordenventa'], 'B', 0, 'C'); // Borde inferior
        $pdf->Cell(15, 10, $row['fecha'], 'B', 0, 'C');
        $pdf->Cell(20, 10, $row['ID_Cliente'], 'B', 0, 'C');
        $pdf->Cell(35, 10, utf8_decode($row['Nombre del Cliente']), 'B', 0, 'C'); // Ajusta el ancho según tus necesidades
        $pdf->Cell(20, 10, utf8_decode($row['Servicio']), 'B', 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($row['Producto']), 'B', 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($row['Tipo de Venta']), 'B', 0, 'C');
        $pdf->Cell(15, 10, utf8_decode($row['Cargo']), 'B', 0, 'C');
        $pdf->Cell(15, 10, utf8_decode($row['Estado']), 'B', 1, 'C'); // Borde inferior y nueva fila
    }
} else {
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(190, 10, 'No se encontraron registros', 0, 1, 'C');
}

// Establecer la zona horaria a Lima, Perú
date_default_timezone_set('America/Lima');

// Obtener la fecha y hora actual en el formato deseado
$fechaImpresion = date('Y-m-d H:i:s'); // Puedes personalizar el formato de la fecha

$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(100, 10, utf8_decode('Fecha de Impresión: ') . $fechaImpresion, 0, 1, 'L');


// Finalmente, genera el PDF y envíalo al navegador
$pdf->Output("HistorialOrdenesVenta.pdf", "I");







