<?php

namespace Paw\App\Controllers;

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

}