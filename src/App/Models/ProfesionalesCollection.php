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

    public function getProfesionales()
    {

        $turnosProfesionales = $this->queryBuilder->profesionalesTurno($this->table);

        $turnosPorProfesional = $this->queryBuilder->turnosPorProfesional($this->table);

        $to_encode = [];
        $diasQueAtiende = array();
        $turnosTomados = array();
        $diasCargados = true;
        $matricula = 0;
        $dia = null;


        foreach ($turnosProfesionales as $turnosProfesional) {

            //Se verifica que la matricula no sea la misma
            if ($matricula != $turnosProfesional["matricula"]) {

                $id = $turnosProfesional["id"];

                $matricula = $turnosProfesional["matricula"];

                $horaInicio[] = [
                    'horas' => (int)substr($turnosProfesional["hora_inicio"], 0, 2),
                    'minutos' => (int)substr($turnosProfesional["hora_inicio"], 3, 2),
                ];

                $horaFinalizacion[] = [
                    'horas' => (int)substr($turnosProfesional["hora_fin"], 0, 2),
                    'minutos' => (int)substr($turnosProfesional["hora_fin"], 3, 2),
                ];


                //Se verifica que los dias no se hayan esten cargados
                if ($diasCargados) {
                    for ($i = 0; $i < sizeof($turnosProfesionales); $i++) {
                        if (($turnosProfesionales[$i]["matricula"] == $turnosProfesional["matricula"])) {

                            if ($dia != $turnosProfesionales[$i]["dia"]) {
                                array_push($diasQueAtiende, $turnosProfesionales[$i]["dia"]);
                                $dia = $turnosProfesionales[$i]["dia"];

                            }
                        }
                    }
                    $diasCargados = false;
                }

                //Se cargan los turnos tomados
                for ($i = 0; $i < sizeof($turnosPorProfesional); $i++) {
                    if ($turnosPorProfesional[$i]["matricula"] == $turnosProfesional["matricula"]) {

                        $date= substr($turnosPorProfesional[$i]["fecha_turno"], 0, 10);


                        $days_dias = array(
                            'Monday'=>'Lunes',
                            'Tuesday'=>'Martes',
                            'Wednesday'=>'Miercoles',
                            'Thursday'=>'Jueves',
                            'Friday'=>'Viernes',
                            'Saturday'=>'Sábado',
                            'Sunday'=>'Domingo'
                        );

                        $diaTurno = $days_dias[date('l', strtotime($date))];

                        $horaTurno = (int)substr($turnosPorProfesional[$i]["fecha_turno"], 11, 2);
                        $minutosTurno = (int)substr($turnosPorProfesional[$i]["fecha_turno"], 14, 2);

                        if ($diaTurno != null && $horaTurno != null && $horaTurno != null) {
                            $json = array('dia' => $diaTurno, 'horas' => $horaTurno, 'minutos' => $minutosTurno);
                            array_push($turnosTomados, $json);
                        }
                    }
                }

                //Se mete en un JSON los datos por profesional
                $to_encode[] = [
                    'id' => $turnosProfesional["id"],
                    'matricula' => $turnosProfesional["matricula"],
                    'nombre' => $turnosProfesional["nombre"],
                    'apellido' => $turnosProfesional["apellido"],
                    'especialidad' => $turnosProfesional["especialidad"],
                    'diasQueAtiende' => $turnosProfesional["dia"],
                    'duracionTurno' => (int)$turnosProfesional["duracionTurno"],
                    'horarioInicio' => $horaInicio,
                    'horarioFinalizacion' => $horaFinalizacion,
                    'diasQueAtiende' => $diasQueAtiende,
                    'turnosTomados' => $turnosTomados,

                ];

                //Se reinician las variables
                $diasCargados = true;
                $horaInicio = [];
                $horaFinalizacion = [];
                $diasQueAtiende = array();
                $turnosTomados = array();
                $dia = null;
            }


            $especialistas = json_encode($to_encode);

        }



        header('Content-type: application/json');



        echo ($especialistas);
        return $especialistas;

    }

}

