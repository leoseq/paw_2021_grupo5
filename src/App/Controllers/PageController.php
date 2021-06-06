<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\Turno;

class PageController extends Controller
{

    public function index()
    {
        $titulo = "Index";
        require $this->viewDir . "index.view.php";
    }

    public function obrasSociales()
    {
        $titulo = "Obras Sociales";
        require $this->viewDir . "obrasSociales.view.php";
    }

    public function institucional()
    {
        $titulo = "Institucional";
        require $this->viewDir . "institucional.view.php";
    }

    public function profesionales()
    {
        $titulo = "Profesionales";
        require $this->viewDir . "profesionales.view.php";
    }

    public function noticias()
    {
        $titulo = "Noticias";
        require $this->viewDir . "noticias.view.php";
    }

    public function login()
    {
        $titulo = "Login";
        require $this->viewDir . "login.view.php";
    }

    public function registro()
    {
        $titulo = "Registro";
        require $this->viewDir . "registro.view.php";
    }

    public function noticia()
    {
        $titulo = "Noticia";
        require $this->viewDir . "noticia.view.php";
    }

    public function listadoTurnos()
    {
        $titulo = "Listado de Turnos";
        require $this->viewDir . "listadoTurnos.view.php";
    }
    
    public function solicitarTurno()
    {
        $titulo = "Solicitar Turno";
        require $this->viewDir . "solicitarTurno.view.php";
    }
    
    public function turnoSolicitado($turno = null)
    {
        $titulo = "Turno Solicitado";
        require $this->viewDir . "turnoSolicitado.view.php";
    }

    public function imprimirListadoTurnos()
    {
        $titulo = "Imprimir Listado de Turnos";
        require $this->viewDir . "imprimirListadoTurnos.view.php";
    }

    public function imprimirTurnoSolicitado()
    {
        $titulo = "Imprimir Turno Solicitado";
        require $this->viewDir . "imprimirTurnoSolicitado.view.php";
    }

    public function turneros()
    {
        $titulo = "Turneros";
        require $this->viewDir . "turneros.view.php";
    }

    public function salaEspera()
    {
        $titulo = "Turnos: Sala de Espera";
        require $this->viewDir . "turneros/salaEspera.view.php";
    }

    public function profesional()
    {
        $titulo = "Turnos: Profesional";
        require $this->viewDir . "turneros/profesional.view.php";
    }

    public function paciente()
    {
        $titulo = "Turnos: Paciente";
        require $this->viewDir . "turneros/paciente.view.php";
    }



}