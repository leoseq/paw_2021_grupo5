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
            <section class="sectionForm">
                <header>
                    <h2>Nuevo Turno</h2>
                </header>

                <hr />
            
                <form href="/saveTurno" method="POST" class="form">
                    <h3>Datos del Profesional</h3>

                    <label for="specialty_input">Especialidad</label>
                    <input
                        type="text"
                        name="specialty_input"
                        id="specialty_input"
                        placeholder="Cardiologia"
                        required
                    />

                    <label for="profesional_input">Profesional</label>
                    <input
                        type="text"
                        name="profesional_input"
                        id="profesional_input"
                        placeholder="Juan Ross"
                        required
                    />
          
                    <hr />
                    <h3>Datos del Paciente</h3>

                    <label for="name_input">Nombre:</label>
                    <input
                        type="text"
                        name="name_input"
                        id="name_input"
                        placeholder="Juan"
                        required
                    />

                    <label for="surname_input">Apellido:</label>
                    <input
                        type="text"
                        name="surname_input"
                        id="surname_input"
                        placeholder="Pérez"
                        required
                    />

                    <label for="email_input">Email:</label>
                    <input
                        type="email"
                        name="email_input"
                        id="email_input"
                        placeholder="usuario@gmail.com"
                        required
                    />

                    <label for="tel_input">Telefono celular</label>
                    <input
                        type="tel"
                        name="tel_input"
                        id="tel_input"
                        placeholder="2364-123456"
                        required
                    />

                    <label for="birth_date_input">Fecha de nacimiento</label>
                    <input
                        type="date"
                        name="birth_date_input"
                        id="birth_date_input"
                        required
                    />

                    <label for="age_input">Edad</label>
                    <input
                        type="number"
                        name="age_input"
                        id="age_input"
                        placeholder="23"
                        required
                    />

                    <label for="turn_date_input">Fecha del turno</label>
                    <input
                        type="datetime-local"
                        name="turn_date_input"
                        id="turn_date_input"
                        required
                    />

                    <hr />

                    <input type="submit" value="Solicitar" />

                    <i class="escoba-icon-24"> <input type="reset" value=" " /></i>
                </form>
            </section>
           
            <?php
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