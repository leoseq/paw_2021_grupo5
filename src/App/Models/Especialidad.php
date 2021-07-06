<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;
use Exception;

class Especialidad extends Model
{
    public $table = 'especialidades';

    public $fields = [
        "nombre" => null,
        "estado" => null,
    ];

    public function setNombre(string $nombre)
    {
        if (strlen($nombre) > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["nombre"] = $nombre;
    }

    public function setEstado(string $estado)
    {
        if (strlen($estado) > 60) {
            throw new InvalidValueFormatException("El estado de la especialidad no debe ser mayor a 60 caracteres");
        }
        $this->fields["estado"] = $estado;
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