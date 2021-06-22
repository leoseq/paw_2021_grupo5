<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;

use Exception;

class Usuario extends Model
{
    public $table = 'usuarios';
    public $fields = [
        "id" => null,
        "nombre" => null,
        "apellido" => null,
        "email" => null,
        "password" => null,
        "rol" => null
    ];
      
    public function setNombre(string $nombre)
    {
        if (is_null($nombre)) {
            throw MandatoryValueException("El nombre es obligatorio.");
        }

        if (strlen($nombre) > 60) {
            throw InvalidValueFormatException("El nombre del paciente no debe ser mayor a 60 caracteres.");
        }
        $this->fields["nombre"] = $nombre; 
    }

    public function setApellido(string $apellido)
    {
        if (is_null($apellido)) {
            throw MandatoryValueException("El apellido es obligatorio.");
        }

        if (strlen($apellido) > 60) {
            throw InvalidValueFormatException("El apellido del paciente no debe ser mayor a 60 caracteres");
        }
        $this->fields["apellido"] = $apellido; 
    }

    public function setEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw InvalidValueFormatException("El email del paciente no tiene el formato correcto.");
        }

        if (is_null($email)) {
            throw MandatoryValueException("El email es obligatorio.");
        }

        $this->fields["email"] = $email; 
    }

    public function setPassword(string $password)
    {
        if (is_null($password)) {
            throw MandatoryValueException("La password es obligatorio.");
        }

        $this->fields["password"] = $password;
    }

    public function setRol(string $rol)
    {
        $this->fields["rol"] = $rol;
    }

    public function getId()
    {
        return $this->fields["id"];
    }

    public function getNombre()
    {
        return $this->fields["nombre"];
    }

    public function getApellido()
    {
        return $this->fields["apellido"];
    }

    public function getEmail()
    {
        return $this->fields["email"];
    }

    public function getPassword()
    {
        return $this->fields["password"];
    }

    public function getRol()
    {
        return $this->fields["rol"];
    }

    public function passwordHash()
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);

        if (!password_needs_rehash($hash, PASSWORD_BCRYPT)) {
            $hash = password_hash($password, PASSWORD_BCRYPT);
        }

        return $hash;
    }


    //TODO: CONTROLAR SI ESTO ES CORRECTO. NO PUEDO ACCEDER AL QUERY BUILDER
    public function existsUser()
    {        
        $params = ["email" => $this->fields['email'] ];
        $record = current($this->queryBuilder->select($this->table, $params)); 
        
        return $record;
    }
    

    public function verifyPassword()
    {
        $params = ["email" => $this->fields['email'] ];
        $record = current($this->queryBuilder->select($this->table, $params));

        return password_verify($this->fields['password'], $record["password"]);
    }

    public function set(array $values)
    {
        foreach (array_keys($this->fields) as $field) {
            if (!isset($values[$field])) {
                continue;
            }

            $method = "set" . ucfirst($field);
            $this->$method($values[$field]);

        }
    }

}