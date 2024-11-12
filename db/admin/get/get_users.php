<?php
// Verifica si el archivo de conexión se incluye correctamente
if (!include(__DIR__.'/../../conexion.php')) {
    die('Error: No se pudo incluir el archivo de conexión.');
}

$usuarios = []; // Array para almacenar los datos de la base de datos
$totalUsuarios = 0; // Inicializa la variable de conteo total
$usuariosActivos = 0; // Conteo de usuarios activos
$usuariosSuspendidos = 0; // Conteo de usuarios suspendidos
$usuariosDesactivados = 0; // Conteo de usuarios desactivados

try {
    // Consulta para obtener los datos de la tabla 'usuarios' con su estado
    $query = "
    SELECT 
        usuarios.id, 
        usuarios.nombres,
        usuarios.apellidos,
        usuarios.ext,
        usuarios.email, 
        usuarios.password,
        roles.nombre AS roles_nombre,
        sucursales.nombre AS sucursal_nombre, 
        status.descripcion AS status_descripcion,
        usuarios.fecha_creacion,
        aoperativas.nombre AS aop_nombre
    FROM 
        usuarios
    JOIN 
        roles ON usuarios.rol_id = roles.id
    JOIN 
        sucursales ON usuarios.sucursal_id = sucursales.id
    JOIN 
        status ON usuarios.status_id = status.id
    LEFT JOIN 
        aoperativas ON usuarios.areaoperativa = aoperativas.id
    WHERE 
        usuarios.id > 1
    ORDER BY 
        usuarios.id ASC"; // Ordena por ID en orden ascendente
    

    $result = $conn->query($query);

    // Verifica si hay resultados y los almacena en el array
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
            $totalUsuarios++; // Incrementa el conteo total

            // Incrementa el conteo basado en el estado del usuario
            switch (strtolower($row['status_descripcion'])) {
                case 'activo':
                    $usuariosActivos++;
                    break;
                case 'suspendido':
                    $usuariosSuspendidos++;
                    break;
                case 'desactivado':
                    $usuariosDesactivados++;
                    break;
                default:
                    // Si hay otros estados, puedes manejarlos aquí
                    break;
            }
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
