<?php

namespace Paw\Core\Database;

use PDO;

//use Paw\Core\Traits\Loggable;
use Monolog\Logger;

class QueryBuilder
{
    //use Loggable;

    public function __construct(PDO $pdo, Logger $logger = null)
    {
        $this->pdo = $pdo;
        $this->logger = $logger;
    }

    public function select($table, $datos = [])
    {

        $where = "1 = 1";

        if (!empty($datos)) {
            $where = sprintf(
                '%s = %s',
                implode(', ', array_keys($datos)),
                ':' . implode(', :', array_keys($datos))
            );
        }

        $query = "SELECT * FROM {$table} WHERE {$where}";

        $this->logger->debug($query);

        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute($datos);

        return $sentencia->fetchAll();
    }

    public function insert($table, $datos)
    {

        $query = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($datos)),
            ':' . implode(', :', array_keys($datos))
        );

        try {

            $sentencia = $this->pdo->prepare($query);
            $sentencia->execute($datos);

        } catch (Exception $e) {
            $this->logger->error("Error en el Insert");
        }

        return $this->pdo->lastInsertId();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function profesionalesTurno($table, $datos = [])
    {

        $query = "SELECT p.id, p.nombre, p.apellido , p.matricula, p.duracionTurno, p.id_especialidad, (e.nombre) AS especialidad,ha.dia, ha.hora_inicio, ha.hora_fin, t.fecha_turno FROM {$table} p
                  INNER JOIN especialidades e ON (e.id = p.id_especialidad)
                  INNER JOIN horario_atencion ha ON (ha.id_profesional = p.id)
                  LEFT JOIN turnos t ON (t.id_profesional = p.id)";

        $this->logger->debug($query);

        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute($datos);
        /*  echo "<pre>";
         var_dump($sentencia->fetchAll());
         die;*/

        return $sentencia->fetchAll();

    }

    //TODO: FIltar por fecha. 1 semana despues de la fecha
    public function turnosPorProfesional($table, $datos = [])
    {

        $query = "select DISTINCT * from profesionales p
                  left JOIN turnos t on (t.id_profesional = p.id)";

        $this->logger->debug($query);

        $sentencia = $this->pdo->prepare($query);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->execute($datos);

        return $sentencia->fetchAll();

    }
}