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
            <ul>
                <li><a href="/turneros/salaEspera">Sala de Espera</a></li>
                <li><a href="/turneros/profesional">Profesional</a></li>
                <li><a href="/turneros/paciente">Paciente</a></li>
            </ul>
        </main>   

        <footer>
            <?php
                require __DIR__ . '/parts/footer.view.php';
            ?>
        </footer>
    </body>
</html>