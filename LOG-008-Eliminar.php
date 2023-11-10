<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'h_933');

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

if (isset($_GET["id"])) {
    $id_devolucion_almacen = $_GET["id"];

    // Realiza la eliminación de la cotización en la base de datos utilizando la variable $id_orden como referencia
    $sql = "DELETE FROM devolucion_almacen WHERE ID_Devolucion = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id_devolucion_almacen);

        if ($stmt->execute()) {
            // Redirige de nuevo a la página principal u otra página de tu elección
            header("Location: LOG-008.php");
            exit();
        } else {
            echo "Error al eliminar el almacenamiento: " . $stmt->error;
        }
    }
}
?>

