<?php

namespace Paw\Core\Database;

use PDO;
use Monolog\Logger;

class QueryBuilder {
    public function __construct(PDO $pdo, Logger $logger = null)
    {
        $this->pdo = $pdo;
        $this->logger = $logger;
    }

    public function select ($table){

        $query = "select * from {$table}";

        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();

        return $sentencia->fetchAll();
    }

    public function insert($table, $datos) {

        $insert = "INSERT INTO {$table} (";
        $values = " VALUES (";

        foreach ( $datos as $key => $value ) {
            $insert .= "$key, ";
            $values .= " '$value', ";
        }

        // Eliminar las ultimas comas y cerrar los parentesis
        $insert = substr($insert, 0, -2).')';
        $values = substr($values, 0, -2).')';

        $query = $insert.$values;

        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute();

    }

    public function update(){

    }

    public function delete() {

    }
}