<?php
include("../config/db.php");

$sql = "SELECT * FROM libros";
$result = mysqli_query($conn, $sql);
?>

<h2>Lista de Libros</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Categoría</th>
        <th>Acciones</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
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