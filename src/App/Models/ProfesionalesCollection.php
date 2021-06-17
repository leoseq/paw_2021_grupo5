<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Profesional;

class ProfesionalesCollection extends Model
{
    public $table = 'profesionales';

    public function getAll()
    {

        $profesionales = $this->queryBuilder->select($this->table);
        $profesionalesCollection = [];


        foreach ($profesionales as $profesional) {
            $newProfesional = new Profesional;
            $newProfesional->set($profesional);
            $profesionalesCollection[] = $newProfesional;
        }

        return $profesionalesCollection;
    }

    public function insertProfesional($table, array $values)
    {
        $profesionales = $this->queryBuilder->insert($this->table, $values);
        return $profesionales;
    }

}

