<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Préstamo</title>
</head>


<body>


<h1>Registrar Préstamo</h1>


<form method="POST">


<label>Usuario:</label>

<select name="id_usuario" required>

<option value="">
Seleccione usuario
</option>


<?php while($usuario = $usuarios->fetch_assoc()): ?>


<option value="<?= $usuario['id_usuario']; ?>">

<?= $usuario['nombre']; ?>

</option>


<?php endwhile; ?>


</select>


<br><br>



<label>Libro:</label>


<select name="id_libro" required>


<option value="">
Seleccione libro
</option>


<?php while($libro = $libros->fetch_assoc()): ?>


<option value="<?= $libro['id_libro']; ?>">

<?= $libro['titulo']; ?>

</option>


<?php endwhile; ?>


</select>


<br><br>



<label>Fecha préstamo:</label>

<input type="date" 
name="fecha_prestamo"
required>


<br><br>


<label>Fecha devolución:</label>

<input type="date"
name="fecha_devolucion"
required>


<br><br>


<button type="submit">

Guardar préstamo

</button>


</form>


</body>

</html>