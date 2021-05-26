<html>
    <head>
        <?php
            require __DIR__ . '/parts/head.view.php';
        ?>
    </head>
    <body>
        <header class="headerImpresion">
            <?php
                require __DIR__ . '/parts/header.view.php';
            ?>
        </header>
        
        <main>
            <section class="turnoSolicitado">
            <?php
                require __DIR__ . '/sections/turnoInfo.view.php';
            ?>
            </section>
        </main>

        <footer>
            <?php
                require __DIR__ . '/parts/footerImpresion.view.php';
            ?>        
        </footer>
    </body>
</html>