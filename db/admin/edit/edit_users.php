<?php
header('Content-Type: application/json'); // Configura la respuesta como JSON

// Verifica si el archivo de conexión se incluye correctamente
if (!@include(__DIR__.'/../../conexion.php')) {
    echo json_encode(['status' => 'error', 'message' => 'Error: No se pudo incluir el archivo de conexión.']);
    exit;
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id = $_POST['editId'];
    $nombres = $_POST['editNombres'];
    $apellidos = $_POST['editApellidos'];
    $ext = $_POST['editExt'];
    $email = $_POST['editEmail'];
    $password = $_POST['editPass'];
    $rol = $_POST['editRol'];
    $sucursal = $_POST['editSucursal'];
    $status = $_POST['editStatus'];
    $areaop = $_POST['editareaop'];

    // Validar que todos los campos requeridos estén completos
    if (!empty($id) && !empty($nombres) && !empty($apellidos) && !empty($email) && !empty($rol) && !empty($sucursal) && !empty($status) && !empty($areaop)) {
        
        // Preparar la consulta de actualización
        $sql = "UPDATE usuarios SET nombres = ?, apellidos = ?, ext = ?, email = ?, password = ?, rol_id = ?, sucursal_id = ?, status_id = ?, areaoperativa = ? WHERE id = ?";
        
        // Preparar y ejecutar la consulta
        if ($stmt = $conn->prepare($sql)) {
            // Vincular parámetros
            $stmt->bind_param("ssissiiiii", $nombres, $apellidos, $ext, $email, $password, $rol, $sucursal, $status, $areaop, $id);
            
            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'Usuario actualizado exitosamente.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el usuario: ' . $stmt->error]);
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error en la preparación de la consulta: ' . $conn->error]);
        }
    } else {
        echo json_encode(['status' => 'warning', 'message' => 'Por favor completa todos los campos requeridos.']);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud no válida.']);
}
exit;
?>