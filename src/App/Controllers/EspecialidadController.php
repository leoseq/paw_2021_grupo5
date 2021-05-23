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


    public function hola()
    {

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];

        echo "<pre>";
        var_dump( $_FILES);
        die;

        # Handling upload
        $timestamp =    time();
        $targetDir =    '/public/';
        $targetName =   $targetDir . $_FILES["archivo"]['name'];
        $targetDbName = $targetDir . $timestamp;
        $targetType =   $_FILES['archivo']['type'];
        $targetSize =   $_FILES['archivo']['size'];






    }


    }