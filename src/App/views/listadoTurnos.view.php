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
        
        <main class="listadoTurnos">
            
            <header>
                <h2>Listado de turnos</h2>
                <a href="/imprimirListadoTurnos">
                    <span class="impresora-icon-36"></span>
                </a>
            </header>

            <select name="select">
                <option value="value1" selected>Todos los turnos</option>
                <option value="value2">Cancelados</option>
                <option value="value3">Aprobados</option>
                <option value="value4">Finalizados</option>
            </select>             

            <section class="fichas">
                <h3>Turnos del usuario</h3>

                <?php
                    foreach ($turnosCollection as $turno) {
                        require __DIR__ . '/cards/turnoCard.view.php';
                    }
                ?>
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