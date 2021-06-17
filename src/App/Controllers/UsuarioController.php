<?php

namespace Paw\App\Controllers;

use Paw\App\Models\UsuarioCollection;
use Paw\Core\Controller;
use Paw\App\Models\Usuario;
use Paw\Core\Exceptions\UserExistsException;
use Paw\Core\Exceptions\UserNotExistsException;
use Paw\Core\Exceptions\UserPasswordWrongException;


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

        $titulo = "";
        $this->twigLoader("temporal.view.twig", compact("titulo"));

    }











    public function login()
    {
        $datos = [];
        $datos["email"] = $this->sanitizeValue($_POST["email_input"]);
        $datos["password"] = $this->sanitizeValue($_POST["password_input"]);

        $this->model->set($datos);

        if (!$this->model->existsUser($datos['email'])) {
            throw new UserNotExistsException("No existe el usuario");
        } else {

            if (!$this->model->verifyPassword($datos['email'],$datos['password'])) {
                $mensaje = "Login Exitoso..!";
            } else {
                throw new UserPasswordWrongException("La password es incorrecta");
            }
        }

        $titulo = "Login Exitoso";
        $this->twigLoader("temporal.view.twig", compact("titulo"));

    }

}