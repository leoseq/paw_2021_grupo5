<?php

namespace Paw\Core\Traits;

//use Monolog\Logger;
//use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//trait Loggable
trait View
{
//    public $logger;
    public $twig;

    public function setView()
//    public functionLogger(Logger $logger)
    {
        $this->twig = $twig;
//        $this->logger = $logger;
    }

}