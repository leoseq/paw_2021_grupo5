<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\Turno;

class TurnoController extends Controller
{
    public ?string $modelName = Turno::class;

    public function saveTurno()
    {
        $turno = new $this->modelName;

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];         
        $datos["apellido"] = $_POST["surname_input"]; 
        $datos["email"] = $_POST["email_input"]; 
        $datos["tel"] = $_POST["tel_input"]; 
        $datos["fechaNacimiento"] = $_POST["birth_date_input"]; 
        $datos["edad"] = $_POST["age_input"]; 
        $datos["fechaTurno"] = $_POST["turn_date_input"]; 
        $datos["especialidad"] = $_POST["specialty_input"]; 
        $datos["profesional"] = $_POST["profesional_input"]; 
        
        $turno->set($datos);

        $titulo = "Turno Solicitado";
        require $this->viewDir . "/turnoSolicitado.view.php";
    }

}