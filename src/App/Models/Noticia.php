<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;
use Exception;

class Noticia extends Model
{
    public $table = 'noticias';

    public $fields = [
        "titulo" => null,
        "fecha" => null,
        "cuerpo" => null,
        "path_archivo" => null,
    ];

    public function setTitulo(string $titulo)
    {
        if (strlen($titulo) > 60) {
            throw new InvalidValueFormatException("El nombre del profesional no debe ser mayor a 60 caracteres");
        }
        $this->fields["titulo"] = $titulo;
    }


    //TODO: VER FECHA
    public function setFecha(string $fecha)
    {
        if (strlen($fecha) > 60) {
            throw new InvalidValueFormatException("El apellido del profesional no debe ser mayor a 60 caracteres");
        }

        $this->fields["fecha"] = $fecha;
    }

    public function setCuerpo(string $cuerpo)
    {
        $this->fields["cuerpo"] = $cuerpo;
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