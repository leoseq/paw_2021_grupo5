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
            
            <section class="institucional">
                <img alt="Noticia" src="/images/portadas/edificio.jpg" />

                <section class="nosotros">
                    <h2>Nosotros</h2>
                    <p>
                        PAWUNLu Medical Group es la Institución Médica por excelencia en la
                        ciudad de Chivilcoy. Con 80 años al servicio de la salud, brindando
                        atención médica personalizada de alta y mediana complejidad,
                        atención ambulatoria y servicios de emergencia; se distingue por su
                        compromiso permanente con el cuidado integral del paciente.
                    </p>
                    <p>
                        Un cuerpo médico de excelencia, con especialistas reconocidos en
                        diferentes áreas y un sólido equipo de profesionales técnicos y
                        administrativos que trabajan día a día con la excelencia como
                        premisa, conforman el capital humano que permite a más de 50 mil
                        pacientes por mes confiar su salud al Sanatorio.
                    </p>
                    <p>
                        El excelente nivel médico, la amplia capacidad de prestaciones y el
                        compromiso de cada profesional con la atención al paciente, hacen de
                        este Sanatorio, un centro médico de primer nivel, donde la salud
                        está siempre primero.
                    </p>

                    <h2>Visión</h2>
                    <p>
                        Sanatorio Corporación Médica San Martín trabaja con el firme
                        propósito de brindar a la comunidad la mejor atención médica, basada
                        en evidencia científica, investigación y contenido ético,
                        acompañando al paciente y su familia; ofreciendo a la vez un ámbito
                        de desarrollo atractivo para su personal y equipo de profesionales,
                        que favorezca su compromiso y sentido de pertenencia con la
                        Institución.
                    </p>
                    <h2>Misión</h2>
                    <p>
                        Ser la organización modelo en el cuidado y restablecimiento de la
                        salud, manteniendo la excelencia en la calidad de atención y respeto
                        por la dignidad de las personas.
                    </p>
                </section>

                <h2>Directivos</h2>

                <section class="profesionales">
                    <section class="resultado-busqueda">
                        <?php
                            // Foreach de Directivos

                            require __DIR__ . '/institucional/institucionalCard.view.php';
                            require __DIR__ . '/institucional/institucionalCard.view.php';
                            require __DIR__ . '/institucional/institucionalCard.view.php';
                            require __DIR__ . '/institucional/institucionalCard.view.php';
                        ?>
                    </section>
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