<?php

namespace Paw\App\Controllers;


use Paw\Core\Controller;
use Paw\App\Models\Turno;


class PageController extends Controller
{


    public function index()
    {
        $titulo = "Index";
        $this->twigLoader("index.view.twig", compact("titulo"));
    }

    public function obrasSociales()
    {
        $titulo = "Obras Sociales";
        $this->twigLoader("obrasSociales.view.twig", compact("titulo"));
    }

    public function institucional()
    {
        $titulo = "Institucional";
        $this->twigLoader("institucional.view.twig", compact("titulo"));
    }

    public function profesionales()
    {
        $titulo = "Profesionales";
        $this->twigLoader("profesionales.view.twig", compact("titulo"));
    }

    public function noticias()
    {
        $titulo = "Noticias";
        $this->twigLoader("noticias.view.twig", compact("titulo"));
    }

    public function login()
    {
        $titulo = "Login";
        $this->twigLoader("login.view.twig", compact("titulo"));
    }

    public function registro()
    {
        $titulo = "Registro";
        $this->twigLoader("registro.view.twig", compact("titulo"));
    }

    public function noticia()
    {
        $titulo = "Noticia";
        $this->twigLoader("noticia.view.twig", compact("titulo"));
    }

    public function listadoTurnos()
    {
        $titulo = "Listado de Turnos";
        $this->twigLoader("listadoTurnos.view.twig", compact("titulo"));
    }
    
    public function solicitarTurno()
    {
        $titulo = "Solicitar Turno";
        $this->twigLoader("solicitarTurno.view.twig", compact("titulo"));
    }
    
    public function turnoSolicitado($turno = null)
    {
        $titulo = "Turno Solicitado";
        $this->twigLoader("turnoSolicitado.view.twig", compact("titulo"));
    }

    public function imprimirListadoTurnos()
    {
        $titulo = "Imprimir Listado de Turnos";
        $this->twigLoader("imprimirListadoTurnos.view.twig", compact("titulo"));
    }

    public function imprimirTurnoSolicitado()
    {
        $titulo = "Imprimir Turno Solicitado";
        $this->twigLoader("imprimirTurnoSolicitado.view.twig", compact("titulo"));
    }

    public function turneros()
    {
        $titulo = "Turneros";
        $this->twigLoader("turneros.view.twig", compact("titulo"));
    }

    public function salaEspera()
    {
        $titulo = "Turnos: Sala de Espera";
        $this->twigLoader("turneros/salaEspera.view.twig", compact("titulo"));
    }

    public function salaEsperaAutomatica()
    {
        $titulo = "Turnos: Sala de Espera";
        $this->twigLoader("turneros/salaEsperaAutomatica.view.twig", compact("titulo"));
    }

    public function profesional()
    {
        $titulo = "Turnos: Profesional";
        $this->twigLoader("turneros/profesional.view.twig", compact("titulo"));
    }

    public function paciente()
    {
        $titulo = "Turnos: Paciente";
        $this->twigLoader("turneros/paciente.view.twig", compact("titulo"));
    }



}