<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include('../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

$usuarios = []; // Array para almacenar los datos de la base de datos

try {
    // Consulta para obtener los datos de la tabla 'usuarios'
    $query = "SELECT id, nombres, email, sucursal_id, status_id FROM usuarios";
    $result = $conn->query($query);

    // Verifica si hay resultados y los almacena en el array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }

    // Cierra la conexión
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
