<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

$usuarios = []; // Array para almacenar los datos de la base de datos
$totalUsuarios = 0; // Variable para contar la cantidad de usuarios

try {
    // Consulta para obtener los datos de la tabla 'usuarios'
    $query = "
    SELECT 
        usuarios.id, 
        usuarios.nombres, 
        usuarios.email, 
        sucursales.nombre AS sucursal_nombre, 
        status.descripcion AS status_descripcion
    FROM 
        usuarios
    JOIN 
        sucursales ON usuarios.sucursal_id = sucursales.id
    JOIN 
        status ON usuarios.status_id = status.id";

        $result = $conn->query($query);

        // Verifica si hay resultados y los almacena en el array
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
                $totalUsuarios++; // Incrementa la cuenta por cada registro
            }
        } else {
            echo "No se encontraron usuarios o ocurrió un error en la consulta.";
        }
    
        // Cierra la conexión
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>