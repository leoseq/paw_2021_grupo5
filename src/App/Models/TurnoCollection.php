<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Turno;

class TurnoCollection extends Model
{

    public $table = 'turnos';

    public function getAll()
    {
        //crear tantos turnos como fichas de turnos
        $turnos = $this->queryBuilder->select($this->table);
        $turnosCollection = [];

        foreach ($turnos as $turno) {
            $newTurno = new Turno();
            $newTurno->set($turno);
            $turnosCollection[] = $newTurno;
        }

        return $turnosCollection;
    }



}

