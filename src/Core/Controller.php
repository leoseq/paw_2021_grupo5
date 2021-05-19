<?php

namespace Paw\Core;

use Paw\Core\Model;

class Controller
{
    public string $viewDir;
    public ?string $modelName = null; //String o Null

    public function __construct() 
    {
        $this->viewDir = __DIR__ . "/../App/views";
        
        if (!is_null($this->modelName)) {
            $this->setModel(new $this->modelName); 
        }
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }
}