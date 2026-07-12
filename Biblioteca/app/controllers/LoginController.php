<?php


require_once __DIR__ . '/../models/Login.php';

class LoginController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Login();
    }


    // Mostrar login
    public function index()
    {
        require_once __DIR__ . '/../views/login/login.php';
    }


    // Validar credenciales
    public function iniciarSesion()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario = trim($_POST["usuario"]);
            $password = trim($_POST["password"]);


            $datosUsuario = $this->modelo->iniciarSesion($usuario);


            if ($datosUsuario) {


                if ($password == $datosUsuario["password"]) {


                    $_SESSION["id_usuario"] = $datosUsuario["id_usuario"];
                    $_SESSION["nombre"] = $datosUsuario["nombre"];
                    $_SESSION["usuario"] = $datosUsuario["usuario"];
                    $_SESSION["rol"] = $datosUsuario["rol"];


                    header("Location: index.php?url=menu");
                    exit();


                } else {


                    $_SESSION["error"] = "Contraseña incorrecta.";
                    header("Location: index.php?url=login");
                    exit();


                }


            } else {


                $_SESSION["error"] = "El usuario no existe.";
                header("Location: index.php?url=login");
                exit();


            }

        }
    }


    // Cerrar sesión
    public function cerrarSesion()
    {
        session_destroy();

        header("Location: index.php?url=login");
        exit();
    }
}