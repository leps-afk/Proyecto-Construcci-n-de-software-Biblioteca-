<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Editar Libro</title>

</head>


<body>


<h1>Editar Libro</h1>


<form method="POST">


<label>
Título:
</label>

<br>


<input type="text"
name="titulo"
value="<?= $libro['titulo']; ?>"
required>


<br><br>



<label>
Autor:
</label>

<br>


<input type="text"
name="autor"
value="<?= $libro['autor']; ?>"
required>


<br><br>



<label>
Editorial:
</label>

<br>


<input type="text"
name="editorial"
value="<?= $libro['editorial']; ?>">


<br><br>



<label>
Categoría:
</label>

<br>


<input type="text"
name="categoria"
value="<?= $libro['categoria']; ?>">


<br><br>



<label>
ISBN:
</label>

<br>


<input type="text"
name="isbn"
value="<?= $libro['isbn']; ?>">


<br><br>



<label>
Año publicación:
</label>

<br>


<input type="number"
name="anio_publicacion"
value="<?= $libro['anio_publicacion']; ?>">


<br><br>



<label>
Cantidad:
</label>

<br>


<input type="number"
name="cantidad"
value="<?= $libro['cantidad']; ?>">


<br><br>



<label>
Estado:
</label>

<br>


<select name="estado">


<option value="Disponible"
<?= ($libro['estado']=="Disponible") ? "selected" : ""; ?>>
Disponible
</option>


<option value="Prestado"
<?= ($libro['estado']=="Prestado") ? "selected" : ""; ?>>
Prestado
</option>


</select>


<br><br>



<button type="submit">
Actualizar Libro
</button>


</form>


</body>

</html>