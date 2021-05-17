<?php

namespace Paw\App\Controllers;

class PageController
{
    public string $viewDir;

    public function __construct() 
    {
        $this->viewDir = __DIR__ . "/../views";
    }

    public function index()
    {
        $titulo = "Index";
        require $this->viewDir . "/index.view.php";
    }

    public function obrasSociales($procesado = false)
    {
        $titulo = "Obras Sociales";
        require $this->viewDir . "/obrasSociales.view.php";
    }

    public function institucional()
    {
        $titulo = "Institucional";
        require $this->viewDir . "/institucional.view.php";
    }

    public function profesionales()
    {
        $titulo = "Profesionales";
        require $this->viewDir . "/profesionales.view.php";
    }

    public function noticias()
    {
        $titulo = "Noticias";
        require $this->viewDir . "/noticias.view.php";
    }

    public function login()
    {
        $titulo = "Login";
        require $this->viewDir . "/login.view.php";
    }

    public function registro()
    {
        $titulo = "Registro";
        require $this->viewDir . "/registro.view.php";
    }

    public function noticia()
    {
        $titulo = "Noticia";
        require $this->viewDir . "/noticia.view.php";
    }

    public function listadoTurno()
    {
        $titulo = "Listado de Turnos";
        require $this->viewDir . "/listadoTurno.view.php";
    }
    
    public function solicitarTurno()
    {
        $titulo = "Solicitar Turno";
        require $this->viewDir . "/solicitarTurno.view.php";
    }
    
    public function turnoSolicitado()
    {
        $titulo = "Turno Solicitado";
        require $this->viewDir . "/turnoSolicitado.view.php";
    }

    public function imprimirListadoTurnos()
    {
        $titulo = "Imprimir Listado de Turnos";
        require $this->viewDir . "/imprimirListadoTurnos.view.php";
    }

    public function imprimirTurnoSolicitado()
    {
        $titulo = "Imprimir Turno Solicitado";
        require $this->viewDir . "/imprimirTurnoSolicitado.view.php";
    }
    
    
    









    public function procesar()
    {
        $formulario = $_POST;
        $this->obrasSociales(true);
    }
    
}