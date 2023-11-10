<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

if (isset($_GET["id"])) {
    $id_cotizacion = $_GET["id"];

    // Realiza la eliminación de la cotización en la base de datos utilizando la variable $id_orden como referencia
    $sql = "DELETE FROM ordenes_de_cotizacion WHERE ID_Cotizacion = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id_cotizacion);

        if ($stmt->execute()) {
            // Redirige de nuevo a la página principal u otra página de tu elección
            header("Location: COMVE-011.php");
            exit();
        } else {
            echo "Error al eliminar la cotización: " . $stmt->error;
        }
    }
}
?>

