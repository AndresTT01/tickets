<?php
// Configuración de conexión FTP
$ftp_servidor = "ftp.tuservidor.com";
$ftp_usuario = "tu_usuario_ftp";
$ftp_password = "tu_contraseña_ftp";

// Conectar y autenticar
$conexion_ftp = ftp_connect($ftp_servidor);
$login_ftp = ftp_login($conexion_ftp, $ftp_usuario, $ftp_password);

if (!$conexion_ftp || !$login_ftp) {
    die("Conexión FTP fallida.");
}

// Activar modo pasivo
ftp_pasv($conexion_ftp, true);
?>
