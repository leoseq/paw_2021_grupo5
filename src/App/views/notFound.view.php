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
            <img src="../assets/images/404.png">
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