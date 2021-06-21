<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\Usuario;
use Paw\Core\Exceptions\UserExistsException;
use Paw\Core\Exceptions\UserNotExistsException;
use Paw\Core\Exceptions\UserPasswordWrongException;
use Paw\Core\Exceptions\UserSessionErrorException;


class UsuarioController extends Controller
{
    public ?string $modelName = Usuario::class;

    public function register()
    {

        // Cargo los datos del FORMULARIO
        $datos = [];
        $datos["nombre"] = $this->sanitizeValue($_POST["name_input"]);  
        $datos["apellido"] = $this->sanitizeValue($_POST["surname_input"]);
        $datos["email"] = $this->sanitizeValue($_POST["email_input"]);
        $datos["password"] = $this->sanitizeValue($_POST["password_input"]);
        $datos["rol"] = "paciente";

        // Instancio y seteo los valores
        $this->model->set($datos);

        // Valido si el usuario ya existe?
        if (!$this->model->existsUser()) {
            
            // Hasheo la password
            $hash = $this->model->passwordHash();
            $this->model->setPassword($hash);
                        
            // Inserto en DB
            $this->model->insert();

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

            if ($this->model->verifyPassword()) {
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