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

        $extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
        $max_tamanyo = 1024 * 1024 * 8;
        if ( in_array($_FILES['imagen1']['type'], $extensiones) ) {
            echo 'Es una imagen';
            if ( $_FILES['imagen1']['size']< $max_tamanyo ) {
                echo 'Pesa menos de 1 MB';
            }
        }

    }


    }