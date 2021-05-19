<header>
    <h2>Turno Solicitado</h2>
</header>

<h3>Datos del profesional</h3>

<article>
    <h5>Profesional y especialidad seleccionada</h5>
    <p>Profesional: <?= $turno["profesional"]; ?> </p>
    <p>Especialidad:<?= $turno["especialidad"]; ?></p>
</article>

<hr />

<h3>Paciente</h3>
<h4>Datos personales</h4>
<article>
    <h5>Datos personales del paciente</h5>
    <p>Nombre y Apellido: <?= $turno["nombre"]; ?>, <?= $turno["apellido"]; ?></p>
    <p>Fecha de nacimiento: <?= $turno["fechaNacimiento"]; ?></p>
    <p>Edad: <?= $turno["edad"]; ?></p>
</article>

<hr />

<h4>Datos de contacto</h4>
<article>
    <h5>Datos de contacto del paciente</h5>
    <p>Telefono: <?= $turno["tel"]; ?></p>
    <p>Email: <?= $turno["email"]; ?></p>
</article>

<hr />

<h4>Datos de turno</h4>
<article>
    <h5>Datos del turno solicitado por el paciente</h5>
    <p>Fecha:</p>
    <p>Hora:</p>
</article>