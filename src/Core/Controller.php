<?php

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;
//use Paw\Core\Traits\View;

class Controller
{
//    use View;

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

    public function twigLoader($view, $array) {
        global $twig;
        echo $twig->render($view, $array);
    }
}