<?php
include("../config/db.php");

if ($_POST) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO libros (titulo, autor, categoria)
            VALUES ('$titulo', '$autor', '$categoria')";

    mysqli_query($conn, $sql);

    header("Location: listar.php");
}
?>

<h2>Agregar Libro</h2>

<form method="POST">
    <input type="text" name="titulo" placeholder="Título"><br>
    <input type="text" name="autor" placeholder="Autor"><br>
    <input type="text" name="categoria" placeholder="Categoría"><br>
    <button type="submit">Guardar</button>
</form>