<?php
$conexion = mysqli_connect("localhost", "root", "", "aves_db");

if (!$conexion) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

$nombre_cientifico = $_POST['nombre_cientifico'];
$nombre_comun = $_POST['nombre_comun'];
$habitat = $_POST['habitat'];
$descripcion = $_POST['descripcion'];


$sql = "INSERT INTO aves (nombre_cientifico, nombre_comun, habitat, descripcion) 
        VALUES ('$nombre_cientifico', '$nombre_comun', '$habitat', '$descripcion')";

if (mysqli_query($conexion, $sql)) {
    echo "Ave agregada correctamente.";
} else {
    echo "Error al agregar ave: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
