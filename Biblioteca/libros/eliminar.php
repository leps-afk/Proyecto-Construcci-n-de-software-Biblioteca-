<?php
// Conexión a la base de datos
include("../config/db.php");
// Capturamos el ID del libro que viene por URL
$id = $_GET['id'];
// Consulta para eliminar el libro seleccionado
$sql = "DELETE FROM libros WHERE id=$id";
// Ejecutamos la consulta
mysqli_query($conn, $sql);
// Redirigimos nuevamente a la lista de libros  
header("Location: listar.php");
?>