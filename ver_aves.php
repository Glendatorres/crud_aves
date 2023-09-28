<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Lista de Aves</h1>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "aves_db");

    if (!$conexion) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM aves";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre Científico</th><th>Nombre Común</th><th>Hábitat</th></tr>";

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre_cientifico'] . "</td>";
            echo "<td>" . $fila['nombre_comun'] . "</td>";
            echo "<td>" . $fila['habitat'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay aves registradas.";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>
