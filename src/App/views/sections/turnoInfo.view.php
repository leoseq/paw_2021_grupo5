<header>
    <h2>Turno Solicitado</h2>
</header>

<h3>Datos del profesional</h3>

<article>
    <h5>Profesional y especialidad seleccionada</h5>
    <p>Profesional: <?= $turno->getProfesional(); ?> </p>
    <p>Especialidad: <?= $turno->getEspecialidad(); ?></p>
</article>

<hr />

<h3>Paciente</h3>
<h4>Datos personales</h4>
<article>
    <h5>Datos personales del paciente</h5>
    <p>Nombre y Apellido: <?= $turno->getNombre(); ?>, <?= $turno->getApellido(); ?></p>
    <p>Fecha de nacimiento: <?= $turno->getFechaNacimiento(); ?></p>
    <p>Edad: <?= $turno->getEdad(); ?></p>
</article>

<hr />

<h4>Datos de contacto</h4>
<article>
    <h5>Datos de contacto del paciente</h5>
    <p>Telefono: <?= $turno->getTel(); ?></p>
    <p>Email: <?= $turno->getEmail(); ?></p>
</article>

<hr />

<h4>Datos de turno</h4>
<article>
    <h5>Datos del turno solicitado por el paciente</h5>
    <p>Fecha: <?= $turno->getFechaTurno(); ?></p>
    <p>Hora: <?= $turno->getFechaTurno(); ?></p>
</article>