<?php

namespace Paw\App\Controllers;

class ErrorController
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
    
    public function notFound()
    {
        http_response_code(404);
        require $this->viewDir . "/not-found.view.php";
    }
}