<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class ErrorController extends Controller
{
    
    public function notFound()
    {
        $titulo = "Pagina NO Encontrada";
        http_response_code(404);
        require $this->viewDir . "notFound.view.php";
    }

    public function internalError()
    {
        $titulo = "Error Interno del Servidor";
        http_response_code(500);
        require $this->viewDir . "internalError.view.php";
    }

}