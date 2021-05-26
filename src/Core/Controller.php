<?php

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;

class Controller
{
    public string $viewDir;
    public ?string $modelName = null; //String o Null

    public function __construct()
    {
        global $connection, $log;

        $this->viewDir = __DIR__ . "/../App/views/";

        if (!is_null($this->modelName)) {
            $qb = new QueryBuilder($connection, $log);
            $model = new $this->modelName;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }
    
    public function sanitizeValue($value)
    {
        return htmlspecialchars($value);
    }
}