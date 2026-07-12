<?php

require_once __DIR__ . '/../models/Prestamos.php';
require_once __DIR__ . '/../models/Libros.php';
require_once __DIR__ . '/../models/Usuarios.php';

class PrestamoController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Prestamo();
    }

    // Listar préstamos
    public function listar()
    {
        $prestamos = $this->modelo->listar();

        require_once __DIR__ . '/../views/prestamos/listar.php';
    }

    // Crear préstamo
    public function crear()
    {
        $libroModel = new Libro();
        $usuarioModel = new Usuario();

        $libros = $libroModel->listar();
        $usuarios = $usuarioModel->listar();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $idUsuario = $_POST['id_usuario'];
            $idLibro = $_POST['id_libro'];
            $fechaPrestamo = $_POST['fecha_prestamo'];
            $fechaDevolucion = $_POST['fecha_devolucion'];
            $estado = "Prestado";

            $this->modelo->guardar(
                $idUsuario,
                $idLibro,
                $fechaPrestamo,
                $fechaDevolucion,
                $estado
            );

            header("Location: index.php?url=admin/prestamos");
            exit();
        }

        require_once __DIR__ . '/../views/prestamos/crear.php';
    }

    // Registrar devolución
    public function editar()
    {
        if (isset($_GET['id'])) {

            $this->modelo->devolver($_GET['id']);

        }

        header("Location: index.php?url=admin/prestamos");
        exit();
    }

    // Eliminar préstamo
    public function eliminar()
    {
        if (isset($_GET['id'])) {

            $this->modelo->eliminar($_GET['id']);

        }

        header("Location: index.php?url=admin/prestamos");
        exit();
    }
}