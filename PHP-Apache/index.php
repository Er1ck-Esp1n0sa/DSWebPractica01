<?php
$host = 'localhost';
$dbname = 'mydb';
$user = 'postgres'; // Usuario por defecto de PostgreSQL
$password = 'postgres'; // La contraseña que configuraste

$dsn = "pgsql:host=$host;dbname=$dbname;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
