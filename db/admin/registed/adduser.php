<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
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
    $estts = $_POST['estts'];
    
    try {
        // Prepara y ejecuta la consulta SQL
        $query = "INSERT INTO usuarios (nombres, apellidos, ext, email, password, rol_id, sucursal_id, status_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssisssss", $name, $lastname, $ext, $mail, $pass, $rol, $sucursal, $estts);
        
        if ($stmt->execute()) {
            echo "Usuario agregado exitosamente.";
        } else {
            echo "Error al agregar el usuario: " . $stmt->error;
        }
        
        // Cierra la conexión
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
