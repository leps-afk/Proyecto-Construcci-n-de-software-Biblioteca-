<?php
require_once __DIR__ . '/../config/Conexion.php';

class Usuario
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::conectar();
    }

    public function listar()
    {
        return $this->conn->query("SELECT * FROM usuarios");
    }

    public function obtener($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function guardar($nombre, $correo, $telefono, $usuario, $password, $rol, $estado)
    {
        $sql = "INSERT INTO usuarios(nombre,correo,telefono,usuario,password,rol,estado)
                VALUES(?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "sssssss",
            $nombre,
            $correo,
            $telefono,
            $usuario,
            $password,
            $rol,
            $estado
        );

        return $stmt->execute();
    }

    public function actualizar($id, $nombre, $correo, $telefono, $usuario, $rol, $estado)
    {
        $sql = "UPDATE usuarios
                SET nombre=?, correo=?, telefono=?, usuario=?, rol=?, estado=?
                WHERE id_usuario=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "ssssssi",
            $nombre,
            $correo,
            $telefono,
            $usuario,
            $rol,
            $estado,
            $id
        );

        return $stmt->execute();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM usuarios WHERE id_usuario=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}