<html>
    <head>
        <?php
            require __DIR__ . '/parts/head.view.php';
        ?>
    </head>
    <body>
        <header>
            <?php
                require __DIR__ . '/parts/nav.view.php';
            ?>
        </header>
        <main>
            <section class="profesionales">
                <header>
                    <h2>Obras Sociales</h2>
                </header>

                <input
                    class="buscador"
                    type="search"
                    placeholder="Buscar obra social"
                />

                <section class="resultado-busqueda">
                    <?php
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                        require __DIR__ . '/obrasSociales/obrasSocialesCard.view.php';
                    ?>
                </section>
            </section>

            <?php
                require __DIR__ . '/parts/nav-mobile.view.php';
            ?> 
        </main>
        <footer>
            <?php
                require __DIR__ . '/parts/footer.view.php';
            ?>        
        </footer>
    </body>
</html>