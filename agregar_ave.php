<!DOCTYPE html>
<html>
<head>
    <title>Agregar Ave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Agregar Ave</h1>
    <form action="procesar_agregar_ave.php" method="POST">
      
        <label for="nombre_cientifico">Nombre Científico:</label>
        <input type="text" name="nombre_cientifico" required><br><br>

        <label for="nombre_comun">Nombre Común:</label>
        <input type="text" name="nombre_comun" required><br><br>


        <label for="habitat">Hábitat:</label>
        <input type="text" name="habitat"><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Agregar Ave">
    </form>
</body>
</html>
