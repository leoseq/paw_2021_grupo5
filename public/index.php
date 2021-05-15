<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$controller = new PageController;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);



if ($path == '/'){
    $controller->index();
} else if ($path == '/obras_sociales') {
    $controller->obrasSociales();
} else {
    $controller = new ErrorController();
    $controller->notFound();
}
