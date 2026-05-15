<?php
// Conexión a la base de datos
include("../config/db.php");
// Consulta para obtener todos los libros
$sql = "SELECT * FROM libros";
// Ejecutamos la consulta
$result = mysqli_query($conn, $sql);
?>

<h2>Lista de Libros</h2>
<!-- Tabla donde se muestran los libros -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Categoría</th>
        <th>Acciones</th>
    </tr>

<?php 
// Recorremos todos los registros de la base de datos
while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <!-- Mostramos los datos del libro --> 
    <td><?= $row['id'] ?></td>
    <td><?= $row['titulo'] ?></td>
    <td><?= $row['autor'] ?></td>
    <td><?= $row['categoria'] ?></td>
    <td>
        <a href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
    </td>
</tr>

<?php } ?>

</table>

<a href="agregar.php">Agregar libro</a>