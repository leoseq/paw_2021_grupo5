<?php

namespace Paw\App\Controllers;

use Paw\App\Models\NoticiasCollection;
use Paw\App\Models\Profesional;
use Paw\App\Models\ProfesionalesCollection;
use Paw\Core\Controller;

class NoticiaController extends Controller
{
    public ?string $modelName = NoticiasCollection::class;

    public $table = 'noticias';

    public function index()
    {
        $titulo = "Noticias";
        $noticias = $this->model->getAll();

        $this->twigLoader("profesionales.view.twig", compact("titulo", "noticias"));
    }

    public function add()
    {
        $titulo = "Noticias";
        $this->twigLoader("addNoticia.view.twig", compact("titulo"));

    }


    public function addNoticia()
    {

        $datos = [];
        $datos["titulo"] = $_POST["title_input"];
        $datos["fecha"] = $_POST["date_input"];
        $datos["cuerpo"] = $_POST["body_input"];
        $datos["path_archivo"] = "/../.../imagen.png";

        $noticia_id = $this->model->insertNoticia($this->table, $datos);

    }


}