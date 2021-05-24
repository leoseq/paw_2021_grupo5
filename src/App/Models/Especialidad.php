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

    public function setEstado(int $estado)
    {
        if ($estado > 60) {
            throw new InvalidValueFormatException("El nombre de la especialidad no debe ser mayor a 60 caracteres");
        }

        $this->fields["estado"] = $estado;
    }

    public function set(array $values)
    {
        foreach (array_keys($this->fields) as $field) {
            if (!isset($values[$field])){
                continue;
            }
            $method = "set" . ucfirst($field);
            $this->$method($values[$field]);

        }
    }

    public function guardarImagen($fileToUpload, $id)
    {

        $turnos_dir = "uploads/turnos/{$id}/"; //directorio en el que se subira

        if (!file_exists($turnos_dir)) {
            mkdir($turnos_dir, 0777, true);
        }

        $filename = $fileToUpload["name"];
        $path = $turnos_dir . $filename;//se añade el directorio y el nombre del archivo
        $uploadOk = 1;//se añade un valor determinado en 1


        $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));


        // Comprueba si el archivo de imagen es una imagen real o una imagen falsa
        if (isset($_POST["submit"])) {
            $check = getimagesize($fileToUpload);
            if ($check !== false) {//si es falso es una imagen y si no lanza error
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        // Comprueba el peso
        if ($fileToUpload["size"] > 500000) {
            echo "Perdon pero el archivo es muy pesado";
            $uploadOk = 0;
        }

        // Permitir ciertos formatos de archivo
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Perdon solo, JPG, JPEG, PNG & GIF Estan soportados";
            $uploadOk = 0;
        }

        //Comprueba si $ uploadOk se establece en 0 por un error
        if ($uploadOk == 0) {
            echo "Perdon, pero el archivo no se subio";
        } else {
            if (move_uploaded_file($fileToUpload["tmp_name"], $path)) {
                echo "El archivo " . basename($fileToUpload["name"]) . " Se subio correctamente";
            } else {
                echo "Error al cargar el archivo";
            }
        }
    }




}