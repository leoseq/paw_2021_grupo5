<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\ObraSocial;

class ObraSocialCollection extends Model
{
    public $table = 'obras_sociales';

    public function getAll()
    {
        $obrasSociales = $this->queryBuilder->select($this->table);
        $obrasSocialesCollection = [];


        foreach ($obrasSociales as $obraSocial) {
            $newObraSocial = new ObraSocial;
            $newObraSocial->set($obraSocial);
            $obrasSocialesCollection[] = $newObraSocial;
        }

        return $obrasSocialesCollection;
    }

    public function insertObraSocial($table, array $values)
    {
        $obraSocial = $this->queryBuilder->insert($this->table, $values);
        return  $obraSocial;
    }

}