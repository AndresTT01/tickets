<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

$suc = []; // Array para almacenar los datos de la base de datos

try {
    // Consulta para obtener los datos de la tabla 'usuarios'
    $query = "SELECT id, nombre, direccion, fecha_creacion FROM sucursales";
    $result = $conn->query($query);

    // Verifica si hay resultados y los almacena en el array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $suc[] = $row;
        }
    }

    // Cierra la conexión
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
