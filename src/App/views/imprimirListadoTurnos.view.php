<html>
    <head>
        <?php
            require __DIR__ . '/parts/head.view.php';
        ?>
    </head>
    <body>
        <header >
            <?php
                require __DIR__ . '/parts/header.view.php';
            ?>
        </header>
        
        <main class="listadoTurnos">
            <section class="fichas">
                <h3>Turnos del usuario</h3>

                <?php
                    require __DIR__ . '/cards/turnoCard.view.php';
                    require __DIR__ . '/cards/turnoCard.view.php';
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