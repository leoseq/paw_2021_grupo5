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
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($especialidades as $especialidad) : ?>
        <tr>
            <td><?= $especialidad->fields["nombre"] ?></td>
            <td><?= $especialidad->fields["estado"] ?></td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</main>

<footer>
    <?php
    require __DIR__ . '/parts/footer.view.php';
    ?>
</footer>
</body>
</html>