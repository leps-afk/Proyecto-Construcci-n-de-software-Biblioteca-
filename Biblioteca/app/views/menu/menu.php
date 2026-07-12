<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Menú Principal</title>

<link rel="stylesheet" href="css/estilos.css">

</head>


<body>


<header>

<h1>
📚 Sistema de Biblioteca
</h1>

<p>
Panel de administración
</p>

</header>



<div class="menu-container">



<div class="welcome">

<h2>
Bienvenido <?= $_SESSION["nombre"]; ?>
</h2>


<p>
<strong>Usuario:</strong>
<?= $_SESSION["usuario"]; ?>
</p>


<p>
<strong>Rol:</strong>
<?= $_SESSION["rol"]; ?>
</p>


</div>




<div class="modules">



<div class="card">

<h3>
📚 Libros
</h3>

<p>
Administrar catálogo de libros
</p>


<a class="btn" href="index.php?url=admin/libros">

Ingresar

</a>


</div>




<div class="card">

<h3>
👥 Usuarios
</h3>

<p>
Gestionar usuarios del sistema
</p>


<a class="btn" href="index.php?url=admin/usuarios">

Ingresar

</a>


</div>





<div class="card">

<h3>
📖 Préstamos
</h3>

<p>
Control de préstamos y devoluciones
</p>


<a class="btn" href="index.php?url=admin/prestamos">

Ingresar

</a>


</div>





<div class="card">

<h3>
📊 Reportes
</h3>

<p>
Consultar información general
</p>


<a class="btn" href="index.php?url=admin/reportes">

Ingresar

</a>


</div>




<div class="card">

<h3>
🚪 Cerrar sesión
</h3>

<p>
Salir del sistema
</p>


<a class="btn" href="index.php?url=login/cerrarSesion">

Salir

</a>


</div>



</div>



</div>



<footer>

Sistema de Biblioteca © <?= date("Y"); ?>

</footer>



</body>

</html>