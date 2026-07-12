<?php



class MenuController
{
    // Mostrar el menú principal
    public function index()
    {
        // Verificar que el usuario haya iniciado sesión
        if (!isset($_SESSION["id_usuario"])) {
           header("Location: index.php?url=login");
            exit();
        }

        require_once __DIR__ . "/../views/menu/menu.php";
    }
}