<?php

require_once __DIR__ . '/../models/Reportes.php';

class ReporteController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Reporte();
    }

    public function index()
    {
        $totalLibros = $this->modelo->totalLibros();
        $totalUsuarios = $this->modelo->totalUsuarios();
        $totalPrestamos = $this->modelo->totalPrestamos();
        $prestamosActivos = $this->modelo->prestamosActivos();

        require_once __DIR__ . '/../views/reportes/index.php';
    }
}