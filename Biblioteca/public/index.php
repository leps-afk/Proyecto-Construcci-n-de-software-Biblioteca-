<?php

session_start();


require_once __DIR__ . '/../app/controllers/LoginController.php';
require_once __DIR__ . '/../app/controllers/MenuController.php';
require_once __DIR__ . '/../app/controllers/LibroController.php';
require_once __DIR__ . '/../app/controllers/UsuarioController.php';
require_once __DIR__ . '/../app/controllers/PrestamoController.php';
require_once __DIR__ . '/../app/controllers/ReporteController.php';



$url = isset($_GET['url']) ? $_GET['url'] : 'login';



switch ($url) {



    // LOGIN
    case 'login':

        $controller = new LoginController();
        $controller->index();

    break;



    case 'login/iniciarSesion':

        $controller = new LoginController();
        $controller->iniciarSesion();

    break;



    case 'login/cerrarSesion':

        $controller = new LoginController();
        $controller->cerrarSesion();

    break;




    // MENU

    case 'menu':

        $controller = new MenuController();
        $controller->index();

    break;




    // LIBROS

    case 'admin/libros':

        $controller = new LibroController();
        $controller->listar();

    break;



    case 'admin/libros/crear':

        $controller = new LibroController();
        $controller->crear();

    break;



    case 'admin/libros/editar':

        $controller = new LibroController();
        $controller->editar();

    break;



    case 'admin/libros/eliminar':

        $controller = new LibroController();
        $controller->eliminar();

    break;




    // USUARIOS

    case 'admin/usuarios':

        $controller = new UsuarioController();
        $controller->listar();

    break;



    case 'admin/usuarios/crear':

        $controller = new UsuarioController();
        $controller->crear();

    break;



    case 'admin/usuarios/editar':

        $controller = new UsuarioController();
        $controller->editar();

    break;



    case 'admin/usuarios/eliminar':

        $controller = new UsuarioController();
        $controller->eliminar();

    break;




    // PRESTAMOS

    case 'admin/prestamos':

        $controller = new PrestamoController();
        $controller->listar();

    break;



    case 'admin/prestamos/crear':

        $controller = new PrestamoController();
        $controller->crear();

    break;



    case 'admin/prestamos/editar':

        $controller = new PrestamoController();
        $controller->editar();

    break;



    case 'admin/prestamos/eliminar':

        $controller = new PrestamoController();
        $controller->eliminar();

    break;




    // REPORTES

    case 'admin/reportes':

        $controller = new ReporteController();
        $controller->index();

    break;



    default:

        echo "Página no encontrada";

    break;


}

?>