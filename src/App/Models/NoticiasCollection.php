<?php


namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Profesional;

class NoticiasCollection extends Model
{
    public $table = 'noticias';

    public function getAll()
    {

        $noticias = $this->queryBuilder->select($this->table);
        $noticiasCollection = [];


        foreach ($noticias as $noticia) {
            $newNoticia = new Noticia;
            $newNoticia->set($noticia);
            $noticiasCollection[] = $newNoticia;
        }

        return $noticiasCollection;
    }

    public function insertNoticia($table, array $values)
    {
        $noticias = $this->queryBuilder->insert($this->table, $values);
        return $noticias;
    }

}

