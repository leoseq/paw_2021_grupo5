<?php

namespace Paw\Core;

class Session
{
    public $prefijo = "SESSID-"; 

    public function __construct()
    {	
        session_start();
    }

    public function startSession($user)
    {

        $_SESSION['idSession'] = session_regenerate_id($this->prefijo);
        $_SESSION['idUsuario'] = $user["id"];
        $_SESSION['nombre'] = $user["nombre"];
        $_SESSION['apellido'] = $user["apellido"];
        $_SESSION['email'] = $user["email"];
        $_SESSION['rol'] = $user["rol"];
    }

    public function finishSession()
    {
        $_SESSION = [];
        setcookie(session_name(), '', time() - 100000000000);
        session_destroy();
    }

    public function getSession()
    {
        return $_SESSION;
    }

    public function getIdSession()
    {
        return $_SESSION['idSession'];
    }

}