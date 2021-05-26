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
        global $request;
        $email = $request->get('email');
        $turnos = $this->model->getAll($email);

        require $this->viewDir . "listadoTurnos.view.php";
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



        require $this->viewDir . "turnoSolicitado.view.php";
    }

}