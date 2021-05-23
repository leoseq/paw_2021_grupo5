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

<main >
    <form action="/hola" method="POST" enctype="multipart/formdata">

        <label for="name_input">Nombre:</label>
        <input
                type="text"
                name="name_input"
                id="name_input"
                placeholder="Juan"
                required
        />

        <input type="file" name="archivo" id="archivo">

        <input type="submit" value="Enviar" />
    </form>

</main>

<footer>
    <?php
    require __DIR__ . '/parts/footer.view.php';
    ?>
</footer>
</body>
</html>