<?php

require_once __DIR__ . '/../models/Usuarios.php';

class UsuarioController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Usuario();
    }

    // Listar usuarios
    public function listar()
    {
        $usuarios = $this->modelo->listar();
        require_once __DIR__ . '/../views/usuarios/listar.php';
    }

    // Crear usuario
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $usuario = trim($_POST['usuario']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $rol = $_POST['rol'];
            $estado = $_POST['estado'];

            $this->modelo->guardar(
                $nombre,
                $correo,
                $telefono,
                $usuario,
                $password,
                $rol,
                $estado
            );

            header("Location: index.php?url=admin/usuarios");
            exit();
        }

        require_once __DIR__ . '/../views/usuarios/crear.php';
    }

    // Editar usuario
    public function editar()
    {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $usuario = trim($_POST['usuario']);
            $rol = $_POST['rol'];
            $estado = $_POST['estado'];

            $this->modelo->actualizar(
                $id,
                $nombre,
                $correo,
                $telefono,
                $usuario,
                $rol,
                $estado
            );

            header("Location: index.php?url=admin/usuarios");
            exit();
        }

        $usuario = $this->modelo->obtener($id);

        require_once __DIR__ . '/../views/usuarios/editar.php';
    }

    // Eliminar usuario
    public function eliminar()
    {
        if (isset($_GET['id'])) {

            $this->modelo->eliminar($_GET['id']);

        }

        header("Location: index.php?url=admin/usuarios");
        exit();
    }
}