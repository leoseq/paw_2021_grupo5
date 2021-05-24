<header>
    <h2>Turno Solicitado</h2>
</header>

<h3>Datos del profesional</h3>

<article>
    <h5>Profesional y especialidad seleccionada</h5>
    <p>Profesional: <?= $this->model->getProfesional(); ?> </p>
    <p>Especialidad: <?= $this->model->getEspecialidad(); ?></p>
</article>

<hr />

<h3>Paciente</h3>
<h4>Datos personales</h4>
<article>
    <h5>Datos personales del paciente</h5>
    <p>Nombre y Apellido: <?= $this->model->getNombre(); ?>, <?= $this->model->getApellido(); ?></p>
    <p>Fecha de nacimiento: <?= $this->model->getFechaNacimiento(); ?></p>
    <p>Edad: <?= $this->model->getEdad(); ?></p>
</article>

<hr />

<h4>Datos de contacto</h4>
<article>
    <h5>Datos de contacto del paciente</h5>
    <p>Telefono: <?= $this->model->getTel(); ?></p>
    <p>Email: <?= $this->model->getEmail(); ?></p>
</article>

<hr />

<h4>Datos de turno</h4>
<article>
    <h5>Datos del turno solicitado por el paciente</h5>
    <p>Fecha: <?= $this->model->getFechaTurno(); ?></p>
    <p>Hora: <?= $this->model->getFechaTurno(); ?></p>
</article>