<?php
include("../config/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM libros WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: listar.php");
?>