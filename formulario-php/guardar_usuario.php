<?php
// Conectarse a la base de datos
$conexion = pg_connect("host=localhost port=5432 dbname=usuario user=postgres password=postgres");

if (!$conexion) {
    die("Error en la conexión a la base de datos.");
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar datos en la tabla
$query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
$resultado = pg_query($conexion, $query);

if ($resultado) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar usuario.";
}

// Cerrar la conexión
pg_close($conexion);
?>
