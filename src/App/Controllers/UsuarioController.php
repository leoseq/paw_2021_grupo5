<?php

namespace Paw\App\Controllers;

use Paw\App\Models\UsuarioCollection;
use Paw\Core\Controller;
use Paw\App\Models\Usuario;
use Paw\Core\Exceptions\UserExistsException;
use Paw\Core\Exceptions\UserNotExistsException;
use Paw\Core\Exceptions\UserPasswordWrongException;
use Paw\Core\Exceptions\UserSessionErrorException;


class UsuarioController extends Controller
{
    public ?string $modelName = UsuarioCollection::class;

    public $table = 'usuarios';

    public function index()
    {
        $titulo = "Usuarios";
        $usuarios = $this->model->getAll();

        $this->twigLoader("listadoUsuarios.view.twig", compact("titulo", "usuarios"));

    }

    public function register()
    {

        // Cargo los datos del FORMULARIO

        $datos = [];
        $datos["nombre"] = $this->sanitizeValue($_POST["name_input"]);
        $datos["apellido"] = $this->sanitizeValue($_POST["surname_input"]);
        $datos["email"] = $this->sanitizeValue($_POST["email_input"]);
        $datos["password"] = $this->sanitizeValue($_POST["password_input"]);
        //TODO: SACAR HARCODEO
        $datos["rol"] = "null" ;

        // Instancio y seteo los valores
        $this->model->set($datos);

        // Valido si el usuario ya existe?
        if (!$this->model->existsUser($datos['email'])) {

            // Hasheo la password
            $hash = $this->model->passwordHash($datos['password']);


            $this->model->setPassword($hash);

            // Inserto en DB
            $obraSocial_id = $this->model->insertUsuario($this->table, $datos);

        } else {
            throw new UserExistsException("El usuario ya existe");
        }

        $titulo = "Registro Exitoso";
        $this->twigLoader("index.view.twig", compact("titulo"));
    }


    public function login()
    {
        $datos = [];
        $datos["email"] = $this->sanitizeValue($_POST["email_input"]);
        $datos["password"] = $this->sanitizeValue($_POST["password_input"]);

        $this->model->set($datos);

        $row = $this->model->existsUser();

        if (empty($row)) {
            throw new UserNotExistsException("No existe el usuario");
        } else {

            if (!$this->model->verifyPassword($datos['email'],$datos['password'])) {
                $mensaje = "Login Exitoso..!";
                $this->session->startSession($row);
            } else {
                throw new UserPasswordWrongException("La password es incorrecta");
            }
        }

        $titulo = "Login Exitoso";
        $session = $this->session->getSession();
        $this->twigLoader("index.view.twig", compact("titulo", "session"));
    }

    public function cerrarSession()
    {
        
        $idSession = $_GET['idSession'];

        if ($this->session->getIdSession() == $idSession) {
            $this->session->finishSession();
        } else {
            throw new UserSessionErrorException("El SESSION ID es incorrecto");
        }
        
        $titulo = "Index";
        $session = $this->session->getSession();

        $this->twigLoader("index.view.twig", compact("titulo", "session"));
    }


}