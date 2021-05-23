<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\Core\Exceptions\InvalidValueFormatException;
use Paw\Core\Exceptions\MandatoryValueException;
use Exception;

class Turno extends Model
{
    public $table = 'turnos';

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
        "profesional" => null,
        "fileToUpload" => null,
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

    public function guardarImagen($fileToUpload)
    {


        $target_dir = "/../../public/assets/images/imagenes/"; //directorio en el que se subira

        $target_file = $target_dir . $fileToUpload;//se añade el directorio y el nombre del archivo



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
        if ($_FILES["fileToUpload"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "El archivo " . basename($_FILES["fileToUpload"]["name"]) . " Se subio correctamente";
            } else {
                echo "Error al cargar el archivo";
            }
        }
    }


    #Todo: Insert en la DB
    public function insertTurno($table, array $values)
    {
        $turnos = $this->queryBuilder->insert($this->table, $values);
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