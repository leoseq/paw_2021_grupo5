<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Paw\Core\Router;
use Paw\Core\Config;
use Paw\Core\Request;
use Paw\Core\Database\ConnectionBuilder;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();

$config = new Config();

$log = new Logger('mvc-app');
$handler = new StreamHandler($config->get("LOG_PATH"));
$handler->setLevel($config->get("LOG_LEVEL"));
$log->pushHandler($handler);


$connectionBuilder = new ConnectionBuilder;
$connectionBuilder->setLogger($log);
$connection = $connectionBuilder->make($config);


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// Load Templates
$loader = new FilesystemLoader(__DIR__ . $config->get("TEMPLATES_DIR"));
$twig = new Environment ($loader, array(
    'cache' => $config->get("TEMPLATES_CACHE_DIR"),
    'debug' => true
));





$request = new Request();

// Rutas
$router = new Router();
$router->setLogger($log);

// Pages
$router->get('/', 'PageController@index');
$router->get('/institucional', 'PageController@institucional');
$router->get('/obrasSociales', 'ObraSocialController@index');
$router->get('/noticia', 'PageController@noticia');
$router->get('/noticias', 'PageController@noticias');
$router->get('/profesionales', 'ProfesionalController@index');
$router->get('/registro', 'PageController@registro');
$router->get('/solicitarTurno', 'PageController@solicitarTurno');
$router->get('/listadoTurnos', 'PageController@listadoTurnos');
$router->get('/login', 'PageController@login');
$router->get('/imprimirListadoTurnos', 'PageController@imprimirListadoTurnos');
$router->get('/imprimirTurnoSolicitado', 'PageController@imprimirTurnoSolicitado');
$router->get('/turnoSolicitado', 'PageController@turnoSolicitado');
$router->get('/admin', 'PageController@admin');



// Turno
$router->post('/saveTurno', 'TurnoController@saveTurno');
$router->get('/listadoTurnos', 'TurnoController@index');

// Especialidades
$router->get('/admin/especialidades', 'EspecialidadController@index');
$router->get('/especialidad', 'EspecialidadController@get');
$router->get('/especialidad/edit', 'EspecialidadController@edit');
$router->post('/especialidad/edit', 'EspecialidadController@set');

$router->get('/listarEspecialidades', 'EspecialidadController@getEspecialidades');


// Usuarios
$router->post('/guardarUsuario', 'UsuarioController@register');
$router->post('/login', 'UsuarioController@login');
$router->get('/admin/usuarios','UsuarioController@index');


// Especialidades
$router->get('/especialidades/add', 'EspecialidadController@add');
$router->post('/testArchivo', 'EspecialidadController@addEspecialidad');

// Profesionales
$router->get('/profesionales/add', 'ProfesionalController@add');
$router->post('/addProfesional', 'ProfesionalController@addProfesional');

$router->get('/admin/profesionales', 'ProfesionalController@getProfesionales');

//Obras Sociales
$router->get('/obrasSociales/add', 'ObraSocialController@add');
$router->post('/addObraSocial', 'ObraSocialController@addObraSocial');

//Noticias
$router->get('/noticias/add', 'NoticiaController@add');
$router->post('/addNoticia', 'NoticiaController@addNoticia');

// Turnero
$router->get('/turneros', 'PageController@turneros');

$router->get('/turneros/salaEspera', 'PageController@salaEspera');
$router->get('/turneros/salaEsperaAutomatica', 'PageController@salaEsperaAutomatica');
$router->get('/turneros/profesional', 'PageController@profesional');
$router->get('/turneros/paciente', 'PageController@paciente');

