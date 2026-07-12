<?php
require_once __DIR__ . '/../config/Conexion.php';

class Libro
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::conectar();
    }

    public function listar()
    {
        return $this->conn->query("SELECT * FROM libros");
    }

    public function obtener($id)
    {
        $sql = "SELECT * FROM libros WHERE id_libro = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function guardar($titulo, $autor, $editorial, $categoria, $isbn, $anio, $cantidad, $estado)
    {
        $sql = "INSERT INTO libros(titulo,autor,editorial,categoria,isbn,anio_publicacion,cantidad,estado)
                VALUES(?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "sssssiss",
            $titulo,
            $autor,
            $editorial,
            $categoria,
            $isbn,
            $anio,
            $cantidad,
            $estado
        );

        return $stmt->execute();
    }

    public function actualizar($id, $titulo, $autor, $editorial, $categoria, $isbn, $anio, $cantidad, $estado)
    {
        $sql = "UPDATE libros
                SET titulo=?, autor=?, editorial=?, categoria=?, isbn=?, anio_publicacion=?, cantidad=?, estado=?
                WHERE id_libro=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "sssssissi",
            $titulo,
            $autor,
            $editorial,
            $categoria,
            $isbn,
            $anio,
            $cantidad,
            $estado,
            $id
        );

        return $stmt->execute();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM libros WHERE id_libro=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}