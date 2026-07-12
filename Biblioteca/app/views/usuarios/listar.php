<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>


<h1>Gestión de Usuarios</h1>


<a href="index.php?url=admin/usuarios/crear">
    Nuevo Usuario
</a>


<br><br>


<table border="1">


<tr>

<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Usuario</th>
<th>Rol</th>
<th>Estado</th>
<th>Acciones</th>

</tr>


<?php while($usuario = $usuarios->fetch_assoc()): ?>


<tr>


<td>
<?= $usuario['id_usuario']; ?>
</td>


<td>
<?= $usuario['nombre']; ?>
</td>


<td>
<?= $usuario['correo']; ?>
</td>


<td>
<?= $usuario['telefono']; ?>
</td>


<td>
<?= $usuario['usuario']; ?>
</td>


<td>
<?= $usuario['rol']; ?>
</td>


<td>
<?= $usuario['estado']; ?>
</td>


<td>


<a href="index.php?url=admin/usuarios/editar&id=<?= $usuario['id_usuario']; ?>">
Editar
</a>


<br>


<a href="index.php?url=admin/usuarios/eliminar&id=<?= $usuario['id_usuario']; ?>"
onclick="return confirm('¿Eliminar usuario?')">

Eliminar

</a>


</td>


</tr>


<?php endwhile; ?>


</table>


</body>

</html>