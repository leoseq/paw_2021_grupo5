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

<main class="homeContainer">

    <?php
    require __DIR__ . '/parts/turnero.view.php';
    require __DIR__ . '/parts/carrusel.view.php';
    require __DIR__ . '/sections/serviciosMedicos.view.php';
    require __DIR__ . '/sections/contactenos.view.php';
    require __DIR__ . '/sections/noticiaHome.view.php';
    ?>

    <section class="cardInstitucional">
        <?php
        require __DIR__ . '/sections/institucionalHome.view.php';
        ?>
    </section>

    <?php
    require __DIR__ . '/parts/navMobile.view.php';
    ?>
</main>
<footer>
    <?php
    require __DIR__ . '/parts/footer.view.php';
    ?>
</footer>
</body>
</html>