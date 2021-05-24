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
            ->create();

        //TODO: Cambiar id_prof e id_espe por claves foraneas, tipo int
        /*
        ->addForeignKey('id_especialidad', 'especialidades', 'id')
        ->addForeignKey('id_obra_social', 'obras_sociales', 'id')
        */


        $tableTurno = $this->table('turnos');
        $tableTurno->addColumn('id_especialidad', 'string')
            ->addColumn('id_profesional', 'string')
            ->addColumn('nombre_paciente', 'string', ['limit' => 40])
            ->addColumn('apellido_paciente', 'string', ['limit' => 40])
            ->addColumn('email_paciente', 'string', ['limit' => 60])
            ->addColumn('telefono_paciente', 'integer')
            ->addColumn('fecha_nacimiento_paciente', 'date')
            ->addColumn('edad_paciente', 'integer')
            ->addColumn('fecha_turno', 'timestamp')
            ->addColumn('estado_turno', 'integer')
            ->create();

        //TODO: Cambiar id_prof e id_espe por claves foraneas, tipo int
        /*
                ->addForeignKey('id_especialidad','especialidades', 'id')
                ->addForeignKey('id_profesional','profesionales', 'id')
        */
        $tableUsuario = $this->table('usuarios');
        $tableUsuario->addColumn('id_usuario', 'integer')
            ->addColumn('nombre', 'string', ['limit' => 40])
            ->addColumn('apellido', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 60])
            ->addColumn('password', 'string')
            ->create();

    }
}
