<?php

namespace Paw\App\Controllers;

use Paw\App\Models\Especialidad;
use Paw\App\Models\EspecialidadesCollection;
use Paw\Core\Controller;


class EspecialidadController extends Controller
{
    public ?string $modelName = EspecialidadesCollection::class; // Devuelve 'Paw\App\Models\'

    public $table = 'especialidades';

    public function index()
    {
        $titulo = "Especialidades";
        $especialidades = $this->model->getAll();
        require $this->viewDir . "listadoEspecialidades.view.php";
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

    public function test()
    {
        $titulo = "Institucional";
        require $this->viewDir . "a-test.view.php";
    }


    public function testArchivo()
    {

        $turno = new Especialidad();

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];
        $datos["estado"] = $_POST["estado_input"];


        $especialidades = $this->model->insertTurno($this->table, $datos);

       # $turnos = $this->queryBuilder->insert($this->table, $datos);

        #$turno->guardarImagen($_FILES["archivo"]);


    }


    }