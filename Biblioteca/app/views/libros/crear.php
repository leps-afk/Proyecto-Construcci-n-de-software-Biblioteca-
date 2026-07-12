<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Crear Libro</title>

</head>


<body>


<h1>Registrar Libro</h1>


<form method="POST">


<label>
Título:
</label>

<br>

<input type="text" name="titulo" required>


<br><br>



<label>
Autor:
</label>

<br>

<input type="text" name="autor" required>


<br><br>



<label>
Editorial:
</label>

<br>

<input type="text" name="editorial">


<br><br>



<label>
Categoría:
</label>

<br>

<input type="text" name="categoria">


<br><br>



<label>
ISBN:
</label>

<br>

<input type="text" name="isbn">


<br><br>



<label>
Año de publicación:
</label>

<br>

<input type="number" name="anio_publicacion">


<br><br>



<label>
Cantidad:
</label>

<br>

<input type="number" name="cantidad">


<br><br>



<label>
Estado:
</label>

<br>


<select name="estado">


<option value="Disponible">
Disponible
</option>


<option value="Prestado">
Prestado
</option>


</select>


<br><br>



<button type="submit">
Guardar Libro
</button>


</form>


</body>

</html>