<?php
require_once __DIR__ . '/../config/Conexion.php';

class Reporte
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::conectar();
    }

    public function totalLibros()
    {
        $sql = "SELECT COUNT(*) as total FROM libros";

        $resultado = $this->conn->query($sql)->fetch_assoc();

        return $resultado["total"];
    }



    public function totalUsuarios()
    {
        $sql = "SELECT COUNT(*) as total FROM usuarios";

        $resultado = $this->conn->query($sql)->fetch_assoc();

        return $resultado["total"];
    }



    public function totalPrestamos()
    {
        $sql = "SELECT COUNT(*) as total FROM prestamos";

        $resultado = $this->conn->query($sql)->fetch_assoc();

        return $resultado["total"];
    }



    public function prestamosActivos()
    {
        $sql = "SELECT COUNT(*) as total FROM prestamos WHERE estado='Prestado'";

        $resultado = $this->conn->query($sql)->fetch_assoc();

        return $resultado["total"];
    }
}