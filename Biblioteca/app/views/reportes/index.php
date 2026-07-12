<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Reportes</title>

    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<header>

    <h1>📊 Reporte General</h1>

    <p>Sistema de Gestión de Biblioteca</p>

</header>

<div class="content">

    <div class="form-container">

        <h2>Resumen del Sistema</h2>

        <table>

            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
            </tr>

            <tr>
                <td>📚 Total de libros</td>
                <td><?= $totalLibros ?></td>
            </tr>

            <tr>
                <td>👥 Total de usuarios</td>
                <td><?= $totalUsuarios ?></td>
            </tr>

            <tr>
                <td>📖 Total de préstamos</td>
                <td><?= $totalPrestamos ?></td>
            </tr>

            <tr>
                <td>🟢 Préstamos activos</td>
                <td><?= $prestamosActivos ?></td>
            </tr>

        </table>

        <br>

        <a class="btn" href="index.php?url=menu">
            ← Volver al menú
        </a>

    </div>

</div>

<footer>

    Sistema de Biblioteca © <?= date("Y") ?>

</footer>

</body>

</html>