<?php
header('Content-Type: application/json'); // Configura la respuesta como JSON

// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    echo json_encode(['status' => 'error', 'message' => 'Error: No se pudo incluir el archivo de conexión.']);
    exit();  // Asegura que no continúe si no se puede conectar
}

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $ext = $_POST['ext'];
    $mail = $_POST['mail'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT); // Hashea la contraseña
    $rol = $_POST['rol'];
    $sucursal = $_POST['sucursal'];

    // Siempre asigna 1 como el valor para el status_id
    $status = 1;

    // Si el rol seleccionado es Operativo, recogemos también el área operativa
    $aop = null;
    if ($rol == 6 && isset($_POST['aop'])) {
        $aop = $_POST['aop']; // Si el rol es "Operativo", tomamos el área operativa
    }

    try {
        // Prepara la consulta SQL para agregar el usuario
        if ($rol == 6 && $aop !== null) {
            // Si el rol es Operativo y hay un área operativa seleccionada
            $query = "INSERT INTO usuarios (nombres, apellidos, ext, email, password, rol_id, sucursal_id, status_id, areaoperativa) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            if ($stmt === false) {
                throw new Exception('Error en la preparación de la consulta: ' . $conn->error);
            }
            $stmt->bind_param("ssisssssi", $name, $lastname, $ext, $mail, $pass, $rol, $sucursal, $status, $aop);
        } else {
            // Si el rol no es Operativo, no incluimos el área operativa
            $query = "INSERT INTO usuarios (nombres, apellidos, ext, email, password, rol_id, sucursal_id, status_id) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            if ($stmt === false) {
                throw new Exception('Error en la preparación de la consulta: ' . $conn->error);
            }
            $stmt->bind_param("ssisssss", $name, $lastname, $ext, $mail, $pass, $rol, $sucursal, $status);
        }

        // Ejecuta la consulta
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Usuario agregado exitosamente.']);
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        // Si ocurre un error, lo reportamos
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
