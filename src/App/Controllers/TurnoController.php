<?php

namespace Paw\App\Controllers;

use Paw\App\Models\TurnoCollection;
use Paw\Core\Controller;
use Paw\App\Models\Turno;

class TurnoController extends Controller
{
    public ?string $modelName = TurnoCollection::class;
    #public $turnosCollection = [];
    public $table = 'turnos';

    public function index()
    {
        $titulo = "Listado de Turnos";

        //TODO refactorizar a otro patron
//        global $request;
//        $email = $request->get('email');
//        $turnos = $this->model->getAll($email);

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

    public function saveTurno()
    {
        $turno = new Turno();



        $datos = [];
        $datos["id_especialidad"] = $_POST["specialty_input"];
        $datos["id_profesional"] = $_POST["profesional_input"];
        $datos["nombre_paciente"] = $_POST["name_input"];
        $datos["apellido_paciente"] = $_POST["surname_input"];
        $datos["email_paciente"] = $_POST["email_input"];
        $datos["telefono_paciente"] = $_POST["tel_input"];
        $datos["fecha_nacimiento_paciente"] = $_POST["birth_date_input"];
        $datos["edad_paciente"] = $_POST["age_input"];
        $datos["fecha_turno"] = $_POST["turn_date_input"];
        $datos["estado_turno"] = 1;


        $turno->set($datos);

        $turno_id = $this->model->insertTurno($this->table, $datos);

        $turno->guardarImagen($_FILES["archivo"], $turno_id);

        $titulo = "Turno Solicitado";


        $turnoArray = array(
            "profesional" => $turno->getProfesional(),
            "especialidad" => $turno->getEspecialidad(),
            "nombrePaciente" => $turno->getNombre(),
            "apellidoPaciente" => $turno->getApellido(),
            "fechaNacimiento" => $turno->getFechaNacimiento(),
            "edad" => $turno->getEdad(),
            "telefono" => $turno->getTel(),
            "email" => $turno->getEmail(),
            "fechaTurno" => $turno->getFechaTurno()
        );

        $this->twigLoader("turnoSolicitado.view.twig", compact("titulo", "turnoArray"));
    }

}