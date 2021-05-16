<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;

use Paw\Core\Router;
use Paw\Core\Config;
use Paw\Core\Request;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();

$config = new Config();

$log = new Logger('mvc-app');
//$handler = new StreamHandler($config->get("LOG_PATH"));
//$handler->setLevel($config->get("LOG_LEVEL"));
//$log->pushHandler($handler);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$request = new Request();

// Rutas
$router = new Router();
$router->setLogger($log);

// Terminadas
$router->get('/', 'PageController@index');
$router->get('/obrasSociales', 'PageController@obrasSociales');
$router->get('/institucional', 'PageController@institucional');
$router->get('/noticias', 'PageController@noticias');
$router->get('/profesionales', 'PageController@profesionales');
$router->get('/login', 'PageController@login');



// Faltantes
$router->get('/imprimirListadoTurnos', 'PageController@imprimirListadoTurnos');
$router->get('/imprimirTurnoSolicitado', 'PageController@imprimirTurnoSolicitado');
$router->get('/listadoTurno', 'PageController@listadoTurno');
$router->get('/noticia', 'PageController@noticia');
$router->get('/registro', 'PageController@registro');
$router->get('/solicitarTurno', 'PageController@solicitarTurno');
$router->get('/turnoSolicitado', 'PageController@turnoSolicitado');

$router->post('/obras_sociales', 'PageController@procesar');
