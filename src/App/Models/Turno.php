<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;

use Exception;

class Turno extends Model
{
    public $table = 'nombre_tabla_db';

    public $fields = [
        "nombre" => null,
        "apellido" => null,
        "email" => null,
        "tel" => null,
        "fechaNacimiento" => null,
        "edad" => null,
        "fechaTurno" => null,
        "horaTurno" => null,
        "especialidad" => null,
        "profesional" => null
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

    public function setTel(string $tel)
    {
        if (is_null($tel)) {
            throw MandatoryValueException("El telefono es obligatorio.");
        }

        if (strlen($tel) > 15) {
            throw InvalidValueFormatException("El telefono del paciente no debe ser mayor a 15 caracteres.");
        }
        $this->fields["tel"] = $tel; 
    }

    public function setFechaNacimiento(string $fechaNacimiento)
    {
        if (is_null($fechaNacimiento)) {
            throw MandatoryValueException("La fecha de nacimiento es obligatoria.");
        }

        $this->fields["fechaNacimiento"] = $fechaNacimiento; 
    }

    public function setEdad(string $edad)
    {
        if (is_null($edad)) {
            throw MandatoryValueException("La edad es obligatoria.");
        }

        if ($edad < 1 || $edad > 131) {
            throw InvalidValueFormatException("La edad del paciente debe ser entre 1 y 130.");
        }
        $this->fields["edad"] = $edad; 
    }
    
    public function setFechaTurno(string $fechaTurno)
    {
        if (is_null($fechaTurno)) {
            throw MandatoryValueException("La Fecha del Turno es obligatoria.");
        }

        $this->fields["fechaTurno"] = $fechaTurno; 
    }

    public function setHoraTurno(string $horaTurno)
    {
        if (is_null($horaTurno)) {
            throw MandatoryValueException("La Hora del Turno es obligatoria.");
        }

        $this->fields["horaTurno"] = $horaTurno; 
    }
    
    public function setEspecialidad(string $especialidad)
    {
        if (is_null($especialidad)) {
            throw MandatoryValueException("La Especialidad del Turno es obligatoria.");
        }

        $this->fields["especialidad"] = $especialidad; 
    }

    public function setProfesional(string $profesional)
    {
        if (is_null($profesional)) {
            throw MandatoryValueException("El Profesional del Turno es obligatorio.");
        }

        $this->fields["profesional"] = $profesional; 
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

    public function getTel()
    {
        return $this->fields["tel"];
    }

    public function getFechaNacimiento()
    {
        return $this->fields["fechaNacimiento"];
    }

    public function getEdad()
    {
        return $this->fields["edad"];
    }
    
    public function getFechaTurno()
    {
        return $this->fields["fechaTurno"];
    }

    public function getHoraTurno()
    {
        return $this->fields["horaTurno"];
    }
    
    public function getEspecialidad()
    {
        return $this->fields["especialidad"];
    }

    public function getProfesional()
    {
        return $this->fields["profesional"];
    }
}