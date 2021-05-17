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
            <?php
                require __DIR__ . '/parts/turnero.view.php';
            ?>

            <section class="noticia">
                <img src="/images/noticias/noticia_1.jpg" alt="imagen-noticia" />

                <h2>Titulo de la noticia</h2>

                <p>21 de Enero de 2021</p>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim....Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim....Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim....Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim....Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim....
                </p>
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