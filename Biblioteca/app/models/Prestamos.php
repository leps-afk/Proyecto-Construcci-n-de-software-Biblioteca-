<?php
require_once __DIR__ . '/../config/Conexion.php';

class Prestamo
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::conectar();
    }

    public function listar()
    {
        $sql = "SELECT p.*, u.nombre, l.titulo
                FROM prestamos p
                INNER JOIN usuarios u ON p.id_usuario = u.id_usuario
                INNER JOIN libros l ON p.id_libro = l.id_libro";

        return $this->conn->query($sql);
    }

    public function guardar($idUsuario, $idLibro, $fechaPrestamo, $fechaDevolucion, $estado)
    {
        $sql = "INSERT INTO prestamos(id_usuario,id_libro,fecha_prestamo,fecha_devolucion,estado)
                VALUES(?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "iisss",
            $idUsuario,
            $idLibro,
            $fechaPrestamo,
            $fechaDevolucion,
            $estado
        );

        return $stmt->execute();
    }

    public function devolver($id)
    {
        $sql = "UPDATE prestamos
                SET estado='Devuelto',
                    fecha_entrega = CURDATE()
                WHERE id_prestamo=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM prestamos WHERE id_prestamo=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}