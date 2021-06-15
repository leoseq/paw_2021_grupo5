<?php

namespace Paw\App\Controllers;

use Paw\App\Models\Profesional;
use Paw\App\Models\ProfesionalesCollection;
use Paw\Core\Controller;

class ProfesionalController extends Controller
{
    public ?string $modelName = ProfesionalesCollection::class;

    public $table = 'profesionales';

    public function index()
    {
        $titulo = "Profesionales";
        $profesionales = $this->model->getAll();
        require $this->viewDir . "listadoProfesionales.view.php";
    }

    public function add()
    {
        $titulo = "Profesionales";
        require $this->viewDir . "addProfesional.view.php";
    }


    public function addProfesional()
    {

        $profesional = new Profesional();

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];
        $datos["apellido"] = $_POST["surname_input"];
        $datos["id_especialidad"] = $_POST["speciality_input"];
        $datos["estado"] = 1;

        $profesional_id = $this->model->insertProfesional($this->table, $datos);

    }


}