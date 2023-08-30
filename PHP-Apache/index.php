<?php
$host = 'localhost'; // Cambia esto si el contenedor se ejecuta en otra máquina
$port = '5432';
$dbname = 'nombre_de_la_base_de_datos';
$user = 'postgres'; // Usuario por defecto de PostgreSQL
$password = 'contraseña'; // La contraseña que configuraste

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
