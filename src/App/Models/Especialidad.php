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
}