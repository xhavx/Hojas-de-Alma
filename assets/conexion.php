<?php
// Datos de configuración de tu servidor local (XAMPP)
$host = "localhost";
$usuario = "root";
$password = ""; // En XAMPP viene vacío. Si usas MAMP en Mac, suele ser "root"
$base_datos = "hda_tienda"; // Asegúrate de que se llame igual en tu phpMyAdmin

// Crear la conexión con la base de datos
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verificar si la conexión falló
if ($conexion->connect_error) {
    die("Error crítico de conexión: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres a UTF-8 para evitar problemas con eñes y acentos
$conexion->set_charset("utf8");
?>