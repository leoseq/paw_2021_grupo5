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

        $this->twigLoader("profesionales.view.twig", compact("titulo", "profesionales"));
    }

    public function add()
    {
        $titulo = "Profesionales";
        $this->twigLoader("addProfesional.view.twig", compact("titulo"));

    }


    public function addProfesional()
    {

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];
        $datos["apellido"] = $_POST["surname_input"];
        $datos["id_especialidad"] = $_POST["speciality_input"];
        $datos["estado"] = 1;
        $datos["cargo_directivo"] = $_POST["management_position_input"];
        $datos["email"] = $_POST["email_input"];
        $datos["path_archivo"] = "/../.../imagen.png";

        $profesional_id = $this->model->insertProfesional($this->table, $datos);

    }



    public function getProfesionales()
    {
        $titulo = "Profesionales";
        $profesionales = $this->model->getProfesionales();
        header('Content-Type: application/json');
        return $profesionales;
    }

}