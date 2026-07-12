<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Editar Usuario</title>

</head>


<body>


<h1>Editar Usuario</h1>


<form method="POST">


<label>
Nombre:
</label>

<br>


<input type="text"
name="nombre"
value="<?= $usuario['nombre']; ?>"
required>


<br><br>



<label>
Correo:
</label>

<br>


<input type="email"
name="correo"
value="<?= $usuario['correo']; ?>"
required>


<br><br>



<label>
Teléfono:
</label>

<br>


<input type="text"
name="telefono"
value="<?= $usuario['telefono']; ?>">


<br><br>



<label>
Usuario:
</label>

<br>


<input type="text"
name="usuario"
value="<?= $usuario['usuario']; ?>"
required>


<br><br>



<label>
Rol:
</label>

<br>


<select name="rol">


<option value="Administrador"
<?= ($usuario['rol']=="Administrador") ? "selected" : ""; ?>>

Administrador

</option>


<option value="Bibliotecario"
<?= ($usuario['rol']=="Bibliotecario") ? "selected" : ""; ?>>

Bibliotecario

</option>


</select>


<br><br>



<label>
Estado:
</label>

<br>


<select name="estado">


<option value="Activo"
<?= ($usuario['estado']=="Activo") ? "selected" : ""; ?>>

Activo

</option>


<option value="Inactivo"
<?= ($usuario['estado']=="Inactivo") ? "selected" : ""; ?>>

Inactivo

</option>


</select>


<br><br>



<button type="submit">

Actualizar Usuario

</button>


</form>


</body>

</html>