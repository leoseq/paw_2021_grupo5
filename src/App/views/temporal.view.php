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

            <h2> - VISTA TEMPORAL - </h2>
            
            <h3>
                <?= $mensaje; ?>
            </h3>

            <?php
                require __DIR__ . '/parts/turnero.view.php';
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