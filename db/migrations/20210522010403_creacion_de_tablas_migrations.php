<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreacionDeTablasMigrations extends AbstractMigration
{
    public function change(): void
    {
        $tableEspecialidades = $this->table('especialidades');

        $tableEspecialidades->addColumn('nombre', 'string')
            ->addColumn('estado', 'boolean')
            ->create();

        $tableObrasSociales = $this->table('obras_sociales');
        $tableObrasSociales->addColumn('nombre', 'string')
            ->addColumn('estado', 'boolean')
            ->create();

        $tableProfesionales = $this->table('profesionales');
        $tableProfesionales->addColumn('nombre', 'string')
            ->addColumn('apellido', 'string')
            ->addColumn('id_especialidad', 'integer')
            ->addColumn('id_obra_social', 'integer')
            ->addColumn('horario_atencion', 'time')
            ->addColumn('dias_atencion', 'string')
            ->addColumn('estado', 'boolean')
            ->addForeignKey('id_especialidad','especialidades', 'id')
            ->addForeignKey('id_obra_social','obras_sociales', 'id')
            ->create();


        $tableTurno = $this->table('turnos');
        //TODO: cambiar especialidad y profesionl a integer para asignar el id de las mismas.
        $tableTurno->addColumn('id_especialidad', 'integer')
            ->addColumn('id_profesional', 'integer')
            ->addColumn('nombre_paciente', 'string', ['limit' => 40])
            ->addColumn('apellido_paciente', 'string', ['limit' => 40])
            ->addColumn('email_paciente', 'string', ['limit' => 60])
            ->addColumn('telefono_paciente', 'integer')
            ->addColumn('fecha_nacimiento_paciente', 'date')
            ->addColumn('edad_paciente', 'integer')
            ->addColumn('fecha_turno', 'timestamp')
            ->addColumn('estado_turno', 'integer')
            ->addForeignKey('id_especialidad','especialidades', 'id')
            ->addForeignKey('id_profesional','profesionales', 'id')
            ->create();


    }
}
