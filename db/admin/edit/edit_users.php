<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

// Verifica si la conexión a la base de datos es válida
if (!$conn) {
    die('Error de conexión a la base de datos: ' . mysqli_connect_error());
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id = $_POST['editId'] ?? null;
    $nombres = $_POST['editNombres'] ?? null;
    $apellidos = $_POST['editApellidos'] ?? null;
    $ext = $_POST['editExt'] ?? null;
    $email = $_POST['editEmail'] ?? null;
    $password = $_POST['editPass'] ?? null;
    $rol = $_POST['editRol'] ?? null;
    $sucursal = $_POST['editSucursal'] ?? null;
    $status = $_POST['editStatus'] ?? null;
    $aoppp = $_POST['editareaop'] ?? null;

    // Asegurar que areaoperativa sea NULL si no es rol 6
    if ($rol != 6) {
        $aoppp = null;
    }

    // Validar que todos los campos requeridos estén completos
    if (!empty($id) && !empty($nombres) && !empty($apellidos) && !empty($email) && !empty($rol) && !empty($sucursal) && !empty($status)) {
        
        // Preparar la consulta de actualización
        $sql = "UPDATE usuarios SET nombres = ?, apellidos = ?, ext = ?, email = ?, password = ?, rol_id = ?, sucursal_id = ?, status_id = ?, areaoperativa = ? WHERE id = ?";
        
        // Preparar y ejecutar la consulta
        if ($stmt = $conn->prepare($sql)) {
            // Vincular parámetros
            $stmt->bind_param("ssissiiiii", $nombres, $apellidos, $ext, $email, $password, $rol, $sucursal, $status, $aoppp, $id);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'Usuario actualizado correctamente.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el usuario: ' . $stmt->error]);
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error en la preparación de la consulta: ' . $conn->error]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Por favor completa todos los campos requeridos.']);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud no válida.']);
}
?>
