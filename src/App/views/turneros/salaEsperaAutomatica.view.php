<html>
<head>
    <?php
    require __DIR__ . '/../parts/head.view.php';
    ?>
</head>
<body class="turneroSalaEspera2-contenedor">
<header>

    <button id="turneroProfesional-siguiente" class="turneroButton">Iniciar Turnos</button>

</header>

<main class="turneroProfesional">

    <a href="/turneros">Atrás</a>
    <section class="turnero-tablas"></section>
    <section class="turno-actual">
        <h3 id="turneroProfesional-nombreProfesional">-</h3>
        <h2 id="turneroProfesional-nroTurno">-</h2>
        <h3 id="turneroProfesional-nombrePaciente">-</h3>
    </section>
    <audio id="soundAlert" src="../assets/sounds/alert.mp3" preload="auto"></audio>
</main>

<footer>
    <?php
    require __DIR__ . '/../parts/footer.view.php';
    ?>
</footer>
</body>
</html>
