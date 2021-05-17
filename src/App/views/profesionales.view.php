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

            <section class="profesionales">
                <header>
                    <h2>Profesionales</h2>
                </header>

                <input
                    class="buscador"
                    type="search"
                    placeholder="Buscar por profesional o por especialidad"
                />

                <section class="resultado-busqueda">
                    <?php
                        require __DIR__ . '/cards/profesionalesCard.view.php';
                        require __DIR__ . '/cards/profesionalesCard.view.php';
                        require __DIR__ . '/cards/profesionalesCard.view.php';
                        require __DIR__ . '/cards/profesionalesCard.view.php';
                        require __DIR__ . '/cards/profesionalesCard.view.php';
                    ?> 
                </section>
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