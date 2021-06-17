<?php

namespace Paw\App\Controllers;

use Paw\App\Models\ObraSocial;
use Paw\App\Models\ObraSocialCollection;
use Paw\Core\Controller;

class ObraSocialController extends Controller
{
    public ?string $modelName = ObraSocialCollection::class;

    public $table = 'obras_sociales';

    public function index()
    {
        $titulo = "Obras Sociales";
        $obrasSociales = $this->model->getAll();

        //TODO: HACER BUSQUEDA PARA TRAER PROFESIONALES ASOCIADOS
        $this->twigLoader("obrasSociales.view.twig", compact("titulo", "obrasSociales"));
    }


    public function add()
    {
        $titulo = "Obras Sociales";
        $this->twigLoader("addObraSocial.view.twig", compact("titulo"));

    }


    public function addObraSocial()
    {

        $datos = [];
        $datos["nombre"] = $_POST["name_input"];
        $datos["estado"] = "activo";
        $datos["path_archivo"] = null;

        $obraSocial_id = $this->model->insertObraSocial($this->table, $datos);

    }


}