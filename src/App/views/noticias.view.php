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
        <main class="noticias">
            <?php
                require __DIR__ . '/parts/turnero.view.php';
            ?>
            
            <header>
                <h2>Noticias</h2>
            </header>
      
            <section class="fichasNoticias">
                <h4>Últimas Noticias</h4>
                <?php
                    require __DIR__ . '/cards/noticiaCard.view.php';
                    require __DIR__ . '/cards/noticiaCard.view.php';
                    require __DIR__ . '/cards/noticiaCard.view.php';
                    require __DIR__ . '/cards/noticiaCard.view.php';
                    require __DIR__ . '/cards/noticiaCard.view.php';
                    require __DIR__ . '/cards/noticiaCard.view.php';
                ?>
            </section>

            <section class="paginador">
                <h4>Paginador</h4>
                <ul>
                    <li><a href="#">«</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
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