<?php

require_once __DIR__ . '/../models/Libros.php';

class LibroController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Libro();
    }

    // Mostrar listado de libros
    public function listar()
    {
        $libros = $this->modelo->listar();
        require_once __DIR__ . '/../views/libros/listar.php';
    }

    // Crear libro
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $titulo = trim($_POST['titulo']);
            $autor = trim($_POST['autor']);
            $editorial = trim($_POST['editorial']);
            $categoria = trim($_POST['categoria']);
            $isbn = trim($_POST['isbn']);
            $anio = $_POST['anio_publicacion'];
            $cantidad = $_POST['cantidad'];
            $estado = $_POST['estado'];

            $this->modelo->guardar(
                $titulo,
                $autor,
                $editorial,
                $categoria,
                $isbn,
                $anio,
                $cantidad,
                $estado
            );

            header("Location: index.php?url=admin/libros");
            exit();
        }

        require_once __DIR__ . '/../views/libros/crear.php';
    }

    // Editar libro
    public function editar()
    {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $titulo = trim($_POST['titulo']);
            $autor = trim($_POST['autor']);
            $editorial = trim($_POST['editorial']);
            $categoria = trim($_POST['categoria']);
            $isbn = trim($_POST['isbn']);
            $anio = $_POST['anio_publicacion'];
            $cantidad = $_POST['cantidad'];
            $estado = $_POST['estado'];

            $this->modelo->actualizar(
                $id,
                $titulo,
                $autor,
                $editorial,
                $categoria,
                $isbn,
                $anio,
                $cantidad,
                $estado
            );

            header("Location: index.php?url=admin/libros");
            exit();
        }

        $libro = $this->modelo->obtener($id);

        require_once __DIR__ . '/../views/libros/editar.php';
    }

    // Eliminar libro
    public function eliminar()
    {
        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $this->modelo->eliminar($id);
        }

        header("Location: index.php?url=admin/libros");
        exit();
    }
}