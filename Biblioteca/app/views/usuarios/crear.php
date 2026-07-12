<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Crear Usuario</title>

</head>


<body>


<h1>Registrar Usuario</h1>


<form method="POST">


<label>
Nombre:
</label>

<br>

<input type="text" name="nombre" required>


<br><br>



<label>
Correo:
</label>

<br>

<input type="email" name="correo" required>


<br><br>



<label>
Teléfono:
</label>

<br>

<input type="text" name="telefono">


<br><br>



<label>
Usuario:
</label>

<br>

<input type="text" name="usuario" required>


<br><br>



<label>
Contraseña:
</label>

<br>

<input type="password" name="password" required>


<br><br>



<label>
Rol:
</label>

<br>


<select name="rol">


<option value="Administrador">
Administrador
</option>


<option value="Bibliotecario">
Bibliotecario
</option>


</select>


<br><br>



<label>
Estado:
</label>

<br>


<select name="estado">


<option value="Activo">
Activo
</option>


<option value="Inactivo">
Inactivo
</option>


</select>


<br><br>



<button type="submit">

Guardar Usuario

</button>


</form>


</body>

</html>