<?php

namespace Paw\App\Models;

use Paw\App\Models\Usuario;
use Paw\Core\Model;

class UsuarioCollection extends Model
{
    public $table = 'usuarios';

    public function getAll()
    {
        $usuarios = $this->queryBuilder->select($this->table);
        $usuariosCollection = [];


        foreach ($usuarios as $usuario) {
            $newUsuario = new Usuario;
            $newUsuario->set($usuario);

            $usuariosCollection[] = $newUsuario;
        }

        return $usuariosCollection;

    }

    public function insertUsuario($table, array $values)
    {

        $usuario = $this->queryBuilder->insert($this->table, $values);
        return $usuario;
    }

    public function set(array $values)
    {
        $usuario = new Usuario;
        $usuario->set($values);
    }

    public function existsUser($email)
    {

        $params = ["email" => $email];

        $record = current($this->queryBuilder->select($this->table, $params));

        if (!empty($record)) {
            return true;
        }

        return false;
    }

    public function passwordHash($password)
    {
        $usuario = new Usuario;
        $hash = $usuario->passwordHash($password);
        return $hash;
    }

    public function setPassword($password)
    {
        $usuario = new Usuario;

        $usuario->setPassword($password);
    }


    public function verifyPassword($email,$password)
    {
        $params = ["email" => $email ];
        $record = current($this->queryBuilder->select($this->table, $params));

        return password_verify($password, $record["password"]);
    }
}