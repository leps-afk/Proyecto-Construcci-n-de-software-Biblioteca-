<?php
require_once __DIR__ . '/../config/Conexion.php';

class Login
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::conectar();
    }

    public function iniciarSesion($usuario)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND estado='Activo'";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }
}