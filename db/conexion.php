<?php
// Configuración de la base de datos
$servername = "localhost"; // Servidor de la base de datos (puede ser "127.0.0.1" o "localhost")
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "tickets"; // Nombre de la base de datos a la que deseas conectar

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>