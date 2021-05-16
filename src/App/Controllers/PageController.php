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
        require $this->viewDir . "/index.view.php";
    }

    public function obrasSociales($procesado = false)
    {
        require $this->viewDir . "/obras-sociales.view.php";
    }

    public function procesar()
    {
        $formulario = $_POST;
        $this->obrasSociales(true);
    }
    
}