<?php
// Conexión a la base de datos
include("../config/db.php");
// Verificamos si el formulario fue enviado
if ($_POST) {
    // Capturamos los datos del formulario
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];
    // Consulta para insertar un nuevo libro
    $sql = "INSERT INTO libros (titulo, autor, categoria)
            VALUES ('$titulo', '$autor', '$categoria')";
    // Ejecutamos la consulta
    mysqli_query($conn, $sql);
    // Redirigimos a la lista de libros
    header("Location: listar.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Libro</title>
</head>
<body>

<h2>Agregar Libro</h2>

<!-- Formulario para registrar un libro -->
<form method="POST">

    <!-- Campo título -->
    <input type="text" name="titulo" placeholder="Título" required><br>

    <!-- Campo autor -->
    <input type="text" name="autor" placeholder="Autor" required><br>

    <!-- Campo categoría -->
    <input type="text" name="categoria" placeholder="Categoría" required><br>

    <!-- Botón guardar -->
    <button type="submit">Guardar</button>

</form>

</body>
</html>