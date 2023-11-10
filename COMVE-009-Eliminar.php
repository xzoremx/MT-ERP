<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

if (isset($_GET["id"])) {
    $id_orden = $_GET["id"];
    
    // Realiza la eliminación de la orden en la base de datos utilizando la variable $id_orden como referencia
    $sql = "DELETE FROM ordenes_de_venta WHERE ID_Ordenventa = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id_orden);
        
        if ($stmt->execute()) {
            // Redirige de nuevo a la página principal u otra página de tu elección
            header("Location: COMVE-009.php");
            exit();
        } else {
            echo "Error al eliminar la orden: " . $stmt->error;
        }
    }
}
?>
