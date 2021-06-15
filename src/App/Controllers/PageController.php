<?php

namespace Paw\App\Controllers;


use Paw\Core\Controller;
use Paw\App\Models\Turno;


class PageController extends Controller
{


    public function index()
    {
        $titulo = "Index";

        // Obtener info de la DB
        $directivos = array(
            [
                "nombreDirectivo" => "Dr. Daniel Villaroel",
                "cargoDirectivo" => "Director General"
            ],
            [
                "nombreDirectivo" => "Dra. Delia Silva",
                "cargoDirectivo" => "Directora de Cirugia"
            ]
        ); 
        
        $noticia = [
                "tituloNoticia" => "Titulo de Noticia",
                "cuerpoNoticia" => "Cuerpo de noticis..."
        ];
        
        $serviciosMasBuscados = array(
            [
                "puesto" => "1",
                "especialidad" => "Cardiología"
            ],
            [
                "puesto" => "2",
                "especialidad" => "Clinica Medica"
            ]
        );
            
        $profesionalesMasBuscados = array(
            [
                "puesto" => "1",
                "profesional" => "Dr. Cristian Mendez"
            ],
            [
                "puesto" => "2",
                "profesional" => "Dra. Maria Dominguez"
            ]
        );
        

        $this->twigLoader("index.view.twig", compact("titulo", "directivos", "noticia", "serviciosMasBuscados", "profesionalesMasBuscados"));
    }

    public function obrasSociales()
    {
        $titulo = "Obras Sociales";

        $obrasSociales = array(
            [
                "nombre" => "OMINT",
                "cantidadProfesionalesAdheridos" => "50",
                "cantidadProfesionalesDisponibles" => "15"
            ],
            [
                "nombre" => "OSDE",
                "cantidadProfesionalesAdheridos" => "20",
                "cantidadProfesionalesDisponibles" => "6"
            ]
        );

        $this->twigLoader("obrasSociales.view.twig", compact("titulo", "obrasSociales"));
    }

    public function institucional()
    {
        $titulo = "Institucional";

        $directivos = array(
            [
                "nombreDirectivo" => "Dr. Daniel Villaroel",
                "cargoDirectivo" => "Director General",
                "emailDirectivo" => "email_director@mail.com"

            ],
            [
                "nombreDirectivo" => "Dra. Delia Silva",
                "cargoDirectivo" => "Directora de Cirugia",
                "emailDirectivo" => "email_director@mail.com"
            ]
        ); 

        $this->twigLoader("institucional.view.twig", compact("titulo", "directivos"));
    }

    public function profesionales()
    {
        $titulo = "Profesionales";
        $profesionales = array(
            [
                "nombreProfesional" => "Dr. Ernesto Fernandez",
                "especialidadProfesional" => "Cardiología",
                "diasAtencion" => "Lunes - Miercoles",
                "horarioAtencion" => "16 a 20 hs",
                "obrasSociales" => "OSDE",
            ],
            [
                "nombreProfesional" => "Dra. Cristina Torres",
                "especialidadProfesional" => "Pediatría",
                "diasAtencion" => "Martes - Jueves",
                "horarioAtencion" => "9 a 15 hs",
                "obrasSociales" => "OSDE - OMINT - SWISS MEDICAL",
            ]
        );

        $this->twigLoader("profesionales.view.twig", compact("titulo", "profesionales"));
    }

    public function noticias()
    {
        $titulo = "Noticias";

        $noticias = array(
            [
                "tituloNoticia" => "Titulo de Noticia A",
                "fechaNoticia" => "20 de Junio 2021",
                "previewCuerpoNoticia" => "Preview del contenido..."
            ],
            [
                "tituloNoticia" => "Titulo de Noticia B",
                "fechaNoticia" => "15 de Junio 2021",
                "previewCuerpoNoticia" => "Preview del contenido..."
            ],
            [
                "tituloNoticia" => "Titulo de Noticia C",
                "fechaNoticia" => "15 de Junio 2021",
                "previewCuerpoNoticia" => "Preview del contenido..."
            ]
        );

        $this->twigLoader("noticias.view.twig", compact("titulo", "noticias"));
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

        $noticia = [
                "tituloNoticia" => "Titulo de Noticia A",
                "fechaNoticia" => "20 de Junio 2021",
                "cuerpoNoticia" => "Cuerpo de la Noticia..."
        ];

        $this->twigLoader("noticia.view.twig", compact("titulo", "noticia"));
    }

    public function listadoTurnos()
    {
        $titulo = "Listado de Turnos";

        $turnos = array(
            [
                "profesional" => "A",
                "especialidad" => "A",
                "nombrePaciente" => "Nombre",
                "apellidoPaciente" => "Apellido",
                "fechaNacimiento" => "12/12/2000",
                "edad" => "12",
                "telefono" => "1111111111",
                "email" => "leo@mail.com",
                "fechaTurno" => "12/12/2021 12:00",
            ]
        );

        $this->twigLoader("listadoTurnos.view.twig", compact("titulo", "turnos"));
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

        $turnos = array(
            [
                "profesional" => "A",
                "especialidad" => "A",
                "nombrePaciente" => "Nombre",
                "apellidoPaciente" => "Apellido",
                "fechaNacimiento" => "12/12/2000",
                "edad" => "12",
                "telefono" => "1111111111",
                "email" => "leo@mail.com",
                "fechaTurno" => "12/12/2021 12:00",
            ]
        );

        $this->twigLoader("imprimirListadoTurnos.view.twig", compact("titulo", "turnos"));
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