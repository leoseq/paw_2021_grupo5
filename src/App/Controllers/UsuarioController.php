<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\Usuario;
use Paw\Core\Exceptions\UserExistsException;
use Paw\Core\Exceptions\UserNotExistsException;

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

    }

    public function login()
    {
        $datos = [];
        $datos["email"] = $this->sanitizeValue($_POST["email_input"]);
        $datos["password"] = $this->sanitizeValue($_POST["password_input"]);
    
        $this->model->set($datos);


        if (!$this->model->existsUser()) {
            throw new UserNotExistsException("No existe el usuario");
        } else {

            if ($this->model->verifyPassword()) {
                echo "Login Exitoso..!";
            } else {
                echo "Password Incorrecta..!";
            }
        }
        die;

    }


}