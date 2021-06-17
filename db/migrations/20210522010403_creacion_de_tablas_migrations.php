<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreacionDeTablasMigrations extends AbstractMigration
{
    public function change(): void
    {
        $tableEspecialidades = $this->table('especialidades');
        $tableEspecialidades->addColumn('nombre', 'string')
            ->addColumn('estado', 'string')
            ->create();

        $tableObrasSociales = $this->table('obras_sociales');
        $tableObrasSociales->addColumn('nombre', 'string')
            ->addColumn('estado', 'string')
            ->addColumn('path_archivo', 'string', ['null' => true])
            ->create();

        $tableProfesionales = $this->table('profesionales');
        $tableProfesionales->addColumn('nombre', 'string')
            ->addColumn('apellido', 'string')
            ->addColumn('id_especialidad', 'integer')
            ->addColumn('estado', 'string')
            ->addColumn('cargo_directivo', 'string', ['null' => true])
            ->addColumn('email', 'string',['null' => true])
            ->addColumn('path_archivo', 'string',  ['null' => true])
            ->addForeignKey('id_especialidad', 'especialidades', 'id')
            ->create();


        $tableHorariosAtencion = $this->table('horario_atencion');
        $tableHorariosAtencion->addColumn('id_profesional','integer')
            ->addColumn('dia','string')
            ->addColumn('hora_inicio', 'time')
            ->addColumn('hora_fin','time')
            ->addForeignKey('id_profesional', 'profesionales', 'id')
            ->create();


        $tableProfesionales_ObrasSociales = $this->table('profesionales_obrasSociales');
        $tableProfesionales_ObrasSociales->addColumn('id_profesional', 'integer')
            ->addColumn('id_obraSocial','integer')
            ->addForeignKey('id_profesional', 'profesionales', 'id')
            ->addForeignKey('id_obraSocial', 'obras_sociales', 'id')
            ->create();


        $tableUsuario = $this->table('usuarios');
        $tableUsuario->addColumn('nombre', 'string', ['limit' => 40])
            ->addColumn('apellido', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 60])
            ->addColumn('password', 'string')
            ->addColumn('rol', 'string')
            ->create();


        $tableTurno = $this->table('turnos');
        $tableTurno->addColumn('id_especialidad', 'integer')
            ->addColumn('id_profesional', 'integer')
            ->addColumn('id_usuario', 'integer')
            ->addColumn('nombre_paciente', 'string', ['limit' => 40])
            ->addColumn('apellido_paciente', 'string', ['limit' => 40])
            ->addColumn('email_paciente', 'string', ['limit' => 60])
            ->addColumn('telefono_paciente', 'integer')
            ->addColumn('fecha_nacimiento_paciente', 'date')
            ->addColumn('edad_paciente', 'integer')
            ->addColumn('fecha_turno', 'timestamp')
            ->addColumn('estado_turno', 'integer')
            ->addColumn('path_archivo', 'string',  ['null' => true])
            ->addForeignKey('id_especialidad', 'profesionales', 'id_especialidad')
            ->addForeignKey('id_profesional', 'profesionales', 'id')
            ->addForeignKey('id_usuario', 'usuarios', 'id')
            ->create();

        $tableNoticias = $this->table('noticias');
        $tableNoticias->addColumn('titulo', 'string', ['limit' => 40])
            ->addColumn('fecha', 'timestamp')
            ->addColumn('cuerpo', 'string')
            ->addColumn('path_archivo', 'string',  ['null' => true])
            ->create();

    }
}
