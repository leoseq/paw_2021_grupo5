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
        <input type="file" name="imagen1" />
        <input type="submit" name="subir-imagen" value="Enviar imagen" />
    </form>

</main>

<footer>
    <?php
    require __DIR__ . '/parts/footer.view.php';
    ?>
</footer>
</body>
</html>