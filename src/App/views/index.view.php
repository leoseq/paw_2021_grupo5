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
                require __DIR__ . '/sections/noticiaHome.view.php';
            ?>
            
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