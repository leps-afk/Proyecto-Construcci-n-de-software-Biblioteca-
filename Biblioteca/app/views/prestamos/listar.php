<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Préstamos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<h1>Gestión de Préstamos</h1>


<a href="index.php?url=admin/prestamos/crear">
    Registrar préstamo
</a>


<br><br>


<table border="1">

<tr>
    <th>ID</th>
    <th>Usuario</th>
    <th>Libro</th>
    <th>Fecha préstamo</th>
    <th>Fecha devolución</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>


<?php while($prestamo = $prestamos->fetch_assoc()): ?>


<tr>

<td>
<?= $prestamo['id_prestamo']; ?>
</td>


<td>
<?= $prestamo['nombre']; ?>
</td>


<td>
<?= $prestamo['titulo']; ?>
</td>


<td>
<?= $prestamo['fecha_prestamo']; ?>
</td>


<td>
<?= $prestamo['fecha_devolucion']; ?>
</td>


<td>
<?= $prestamo['estado']; ?>
</td>


<td>


<?php if($prestamo['estado'] == "Prestado"): ?>


<a href="index.php?url=admin/prestamos/editar&id=<?= $prestamo['id_prestamo']; ?>"
onclick="return confirm('¿Registrar devolución del libro?')">

Devolver

</a>


<?php else: ?>

Devuelto

<?php endif; ?>


<br>


<a href="index.php?url=admin/prestamos/eliminar&id=<?= $prestamo['id_prestamo']; ?>"
onclick="return confirm('¿Eliminar préstamo?')">

Eliminar

</a>


</td>


</tr>


<?php endwhile; ?>


</table>


</body>

</html>