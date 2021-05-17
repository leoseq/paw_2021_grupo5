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

            <?php
                require __DIR__ . '/sections/serviciosMedicos.view.php';
                require __DIR__ . '/sections/contactenos.view.php';
            ?>
            

            <section class="cardNoticias">
                <header>
                    <h2>Ultimas noticias</h2>
                </header>

                <img alt="Noticia" src="/images/noticias/noticia_1.jpg" />
                <article>
                    <h2>Titulo noticia</h2>
                    <a href="/noticia" style="color: black">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        eiusmod tempor incidunt ut labore et dolore magna aliqua...Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod
                        tempor incidunt ut labore et dolore magna aliqua...Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
                        incidunt ut labore et dolore magna aliqua...
                        </p>
                    </a>
                </article>
            </section>

            <section class="cardInstitucional">
                <header>
                    <h2>Institucional</h2>
                </header>

                <section style="display: flex; margin-bottom: 10px">
                    <header>
                        <h3>Autoridades</h3>
                    </header>

                    <article>
                        <header>
                            <h4>Profesional</h4>
                        </header>
                        <img alt="doctor" src="/images/personas/doctor_1.jpg" />
                        <p>Juan Ross</p>
                        <p>Director</p>
                    </article>
                    <article>
                        <header>
                            <h4>Profesional</h4>
                        </header>
                        <img alt="doctor" src="/images/personas/doctor_2.jpg" />
                        <p>Martin Pereyra</p>
                        <p>Vicedirector</p>
                    </article>
                    <article>
                        <header>
                            <h4>Profesional</h4>
                        </header>
                        <img alt="doctor" src="/images/personas/doctor_3.jpg" />
                        <p>Enzo Pérez</p>
                        <p>Coordinador General</p>
                    </article>

                    <article>
                        <header>
                        <h4>Profesional</h4>
                            </header>
                        <img alt="doctor" src="/images/personas/doctora_1.jpg" />
                        <p>Alejandra Parisotto</p>
                        <p>Directora de Enfermería</p>
                    </article>
                </section>
            </section>

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