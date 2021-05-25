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
            <section class="turnoSolicitado">
               
                <?php
                    require __DIR__ . '/sections/turnoInfo.view.php';
                ?> 

                <article style="justify-content: space-around">
                    <h5>Botones</h5>
                    <a href="/listadoTurnos?email=<?= $this->model->getEmail(); ?>">Ver turnos</a>
                    <button>Agregar al calendario</button>
                </article>
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