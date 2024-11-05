<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include('../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $name = $_POST['names'];
    $address = $_POST['dire'];

    try {
        // Prepara y ejecuta la consulta SQL
        $query = "INSERT INTO sucursales (nombre, direccion) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $name, $address);

        if ($stmt->execute()) {
            echo "Sucursal agregada exitosamente.";
        } else {
            echo "Error al agregar la sucursal: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
