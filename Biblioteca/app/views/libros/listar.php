<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>


<body>


<h1>Gestión de Libros</h1>


<a href="index.php?url=admin/libros/crear">
Nuevo Libro
</a>


<br><br>


<table border="1">


<tr>

<th>ID</th>
<th>Título</th>
<th>Autor</th>
<th>Editorial</th>
<th>Categoría</th>
<th>ISBN</th>
<th>Año</th>
<th>Cantidad</th>
<th>Estado</th>
<th>Acciones</th>

</tr>


<?php while($libro = $libros->fetch_assoc()): ?>


<tr>


<td>
<?= $libro['id_libro']; ?>
</td>


<td>
<?= $libro['titulo']; ?>
</td>


<td>
<?= $libro['autor']; ?>
</td>


<td>
<?= $libro['editorial']; ?>
</td>


<td>
<?= $libro['categoria']; ?>
</td>


<td>
<?= $libro['isbn']; ?>
</td>


<td>
<?= $libro['anio_publicacion']; ?>
</td>


<td>
<?= $libro['cantidad']; ?>
</td>


<td>
<?= $libro['estado']; ?>
</td>


<td>


<a href="index.php?url=admin/libros/editar&id=<?= $libro['id_libro']; ?>">
Editar
</a>


<br>


<a href="index.php?url=admin/libros/eliminar&id=<?= $libro['id_libro']; ?>"
onclick="return confirm('¿Eliminar libro?')">

Eliminar

</a>


</td>


</tr>


<?php endwhile; ?>


</table>


</body>

</html>