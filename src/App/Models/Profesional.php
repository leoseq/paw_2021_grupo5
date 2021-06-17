<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;
use Exception;

class Profesional extends Model
{
    public $table = 'profesionales';

    public $fields = [
        "nombre" => null,
        "apellido" => null,
        "id_especialidad" => null,
        "estado" => null,
        "cargo_directivo" => null,
        "email" => null,
        "path_archivo" => null,
    ];

    public function setNombre(string $nombre)
    {
        if (strlen($nombre) > 60) {
            throw new InvalidValueFormatException("El nombre del profesional no debe ser mayor a 60 caracteres");
        }
        $this->fields["nombre"] = $nombre;
    }

    public function setApellido(string $apellido)
    {
        if (strlen($apellido) > 60) {
            throw new InvalidValueFormatException("El apellido del profesional no debe ser mayor a 60 caracteres");
        }

        $this->fields["apellido"] = $apellido;
    }

    public function setId_Especialidad(int $id_especialidad)
    {
        if ($id_especialidad > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["id_especialidad"] = $id_especialidad;
    }

    public function setEstado(int $estado)
    {
        if ($estado > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["estado"] = $estado;
    }

    public function setCargo_directivo(string $cargo_directivo)
    {
        if (strlen($cargo_directivo) > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["cargo_directivo"] = $cargo_directivo;
    }

    public function setEmail(string $email)
    {
        if (strlen($email) > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["email"] = $email;
    }

    public function setPath_archivo(string $path_archivo)
    {
        if (strlen($path_archivo) > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["path_archivo"] = $path_archivo;
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