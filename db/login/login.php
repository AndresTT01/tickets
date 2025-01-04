<?php
session_start();

// Incluye el archivo de conexión
if (!include(__DIR__ . '/../../db/conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

// Verifica si la conexión es válida
if (!$conn) {
    die('Error de conexión a la base de datos.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitiza las entradas del formulario
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['pass'];

    if (!empty($email) && !empty($password)) {
        // Prepara y ejecuta la consulta
        $stmt = mysqli_prepare($conn, "SELECT id, email, password, rol_id FROM usuarios WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            // Verifica la contraseña
            if (password_verify($password, $user['password'])) {
                // Inicia sesión exitosamente
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['rol'] = $user['rol_id'];

                // Redirige según el rol
                switch ($user['rol_id']) {
                    case 1: // Admin
                        include(__DIR__.'../../../templates/admin/index.php'); // Incluir el archivo para Admin
                        header('Location: index.php');
                        break;
                    case 3: // Soporte
                        include(__DIR__.'/../../example.php'); // Incluir el archivo para Soporte
                        header('Location: soporte_panel.php');
                        break;
                    default: // Usuario común
                        include(__DIR__.'/../../example.php'); // Incluir el archivo para Usuario común
                        header('Location: ../../templates/usuario/index.php');
                        break;
                }
                
                exit();
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "Correo electrónico no registrado.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $error = "Por favor, completa todos los campos.";
    }
}
?>
