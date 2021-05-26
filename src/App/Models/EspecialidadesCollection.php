<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Especialidad;

class EspecialidadesCollection extends Model
{

    public $table = 'especialidades';

    public function getAll()
    {

        $especialidades = $this->queryBuilder->select($this->table);
        $especialidadesCollection = [];


        foreach ($especialidades as $especialidad) {
            $newEspecialidad = new Especialidad;
            $newEspecialidad->set($especialidad);
            $especialidadesCollection[] = $newEspecialidad;
        }

        return $especialidadesCollection;
    }

    public function insertEspecialidad($table, array $values)
    {

        $turnos = $this->queryBuilder->insert($this->table, $values);
        return  $turnos;
    }

}

