<?php

namespace Paw\App\Controllers;

use Paw\App\Models\EspecialidadesCollection;
use Paw\Core\Controller;
use Paw\App\Models\EspecialidadCollection;
use Paw\App\Models\Especialidad;


class EspecialidadController extends Controller
{
    public ?string $modelName = EspecialidadesCollection::class; // Devuelve 'Paw\App\Models\Turno'

    public $table = 'especialidades';

    public function index()
    {
        $titulo = "Listado de Especialidades";
        $especialidades = $this->model->getAll();
        require $this->viewDir . "/listadoEspecialidades.view.php";
    }
}