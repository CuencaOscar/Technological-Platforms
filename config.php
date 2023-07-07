<?php
// Configuración de la base de datos
$dbHost = 'localhost';
$dbName = 'db_streaming';
$dbUser = 'root';
$dbPass = 'root';

// Conexión a la base de datos
$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
