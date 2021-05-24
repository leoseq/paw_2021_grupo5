<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\TurnoCollection;
use Paw\App\Models\Turno;


class TurnoController extends Controller
{
    public ?string $modelName = Turno::class; // Devuelve 'Paw\App\Models\Turno'

    public $table = 'turnos';

    public function index()
    {
        $titulo = "Listado de Turnos";
        $turnos = $this->model->getAll();
        require $this->viewDir . "listadoTurnos.view.php";
    }


    public function saveTurno()
    {

        $datos = [];
        $datos["id_especialidad"] = $_POST["specialty_input"];
        $datos["id_profesional"] = $_POST["profesional_input"];
        $datos["nombre_paciente"] = $_POST["name_input"];
        $datos["apellido_paciente"] = $_POST["surname_input"];
        $datos["email_paciente"] = $_POST["email_input"];
        $datos["telefono_paciente"] = $_POST["tel_input"];
        $datos["fecha_nacimiento_paciente"] = $_POST["birth_date_input"];
        $datos["edad_paciente"] = $_POST["age_input"];
        $datos["fechaTurno"] = $_POST["turn_date_input"];
        $datos["estadoTurno"] = 1;


        $this->model->set($datos);

        $turnos_id = $this->model->insertTurno();

        $this->model->guardarImagen($_FILES["archivo"], $turnos_id);

        $titulo = "Turno Solicitado";

        #require $this->viewDir . "turnoSolicitado.view.php";
    }

}