<?php

namespace Paw\App\Controllers;

use Paw\App\Models\Especialidad;
use Paw\App\Models\EspecialidadesCollection;
use Paw\Core\Controller;


class EspecialidadController extends Controller
{
    public ?string $modelName = EspecialidadesCollection::class;

    public $table = 'especialidades';

    public function index()
    {
        $titulo = "Especialidades";
        $especialidades = $this->model->getAll();


        $this->twigLoader("listadoEspecialidades.view.twig", compact("titulo", "especialidades"));
    }

    public function get()
    {

    }

    public function edit()
    {

    }

    public function set()
    {

    }

    public function add()
    {
        $titulo = "Especialidad";
        $this->twigLoader("addEspecialidad.view.twig", compact("titulo"));
    }


    public function addEspecialidad()
    {

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];
        $datos["estado"] = "activo";

        $especialidades_id = $this->model->insertEspecialidad($this->table, $datos);

    }


    }