<?php

namespace Paw\App\Controllers;

class PageController
{
    public string $viewDir;

    public function __construct() 
    {
        $this->viewDir = __DIR__ . "/../views";
        $this->menu = [
            [
                "href" => "/",
                "name" => "Home"
            ],
            [
                "href" => "/obras_sociales",
                "name" => "Obras Sociales"
            ]
        ];
    }

    public function index()
    {
        $titulo = "Index";
        require $this->viewDir . "/index.view.php";
    }

    public function obrasSociales($procesado = false)
    {
        $titulo = "Obras Sociales";
        require $this->viewDir . "/obras-sociales.view.php";
    }

    public function institucional()
    {
        $titulo = "Institucional";
        require $this->viewDir . "/institucional.view.php";
    }

    public function profesionales()
    {
        $titulo = "Profesionales";
        require $this->viewDir . "/profesionales.view.php";
    }

    public function noticias()
    {
        $titulo = "Noticias";
        require $this->viewDir . "/noticias.view.php";
    }

    public function login()
    {
        $titulo = "Login";
        require $this->viewDir . "/login.view.php";
    }

    public function procesar()
    {
        $formulario = $_POST;
        $this->obrasSociales(true);
    }
    
}