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

    public function guardarImagen($fileToUpload)
    {

        $target_dir = "turnos"; //directorio en el que se subira

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . $fileToUpload["name"];//se añade el directorio y el nombre del archivo

        $uploadOk = 1;//se añade un valor determinado en 1
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Comprueba si el archivo de imagen es una imagen real o una imagen falsa
        if (isset($_POST["submit"])) {//detecta el boton
            $check = getimagesize($fileToUpload);
            if ($check !== false) {//si es falso es una imagen y si no lanza error
                echo "Archivo es una imagen- " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "El archivo no es una imagen";
                $uploadOk = 0;
            }
        }
// Comprobar si el archivo ya existe
        if (file_exists($target_file)) {
            echo "El archivo ya existe";
            $uploadOk = 0;//si existe lanza un valor en 0
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
//si todo está bien, intenta subir el archivo
        } else {
            if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
                echo "El archivo " . basename($fileToUpload["name"]) . " Se subio correctamente";
            } else {
                echo "Error al cargar el archivo";
            }
        }
    }




}