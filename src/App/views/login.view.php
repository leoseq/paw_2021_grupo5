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
        
        <main class="containerLogin">
           <?php
                require __DIR__ . '/sections/loginForm.view.php';
                require __DIR__ . '/sections/numerosTurno.view.php';
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