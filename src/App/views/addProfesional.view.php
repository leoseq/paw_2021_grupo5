<html>
<head>
    <?php
    require __DIR__ . '/parts/head.view.php';
    ?>
</head>
<body>
<header>
    <?php
    require __DIR__ . '/parts/header.view.php';
    require __DIR__ . '/parts/nav.view.php';
    ?>
</header>

<main>
    <form action="/addProfesional" method="POST" enctype='multipart/form-data'>

        <h1>Nuevo Profesional</h1>

        <label for="name_input">Nombre:</label>
        <input
            type="text"
            name="name_input"
            id="name_input"
            placeholder="Juan"
            required
        />

        <label for="name_input">Apellido:</label>
        <input
            type="text"
            name="surname_input"
            id="surname_input"
            placeholder="Bert"
            required
        />

        <label for="name_input">Especialidad:</label>
        <input
                type="number"
                name="speciality_input"
                id="speciality_input"
                required
        />

        <input type="submit" value="Enviar"/>
    </form>

</main>



<footer>
    <?php
    require __DIR__ . '/parts/footer.view.php';
    ?>
</footer>
</body>
</html>