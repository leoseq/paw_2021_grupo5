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

        <hr/>

        <form action="/saveTurno" method="POST" class="form" enctype="multipart/formdata">
            <h3>Datos del Profesional</h3>

            <label for="specialty_input">Especialidad</label>
            <input list="especialidad-lista" id="specialty_input" name="specialty_input"
                   placeholder="Cardiologia"
                   autofocus tabindex="1"
                   class="datalist"
                   required/>

            <datalist id="especialidad-lista">
                <option value="Kinesiología">
                <option value="Cardiología">
                <option value="Odontología">
            </datalist>


            <label for="profesional_input">Especialidad</label>
            <input list="profesional-lista" id="profesional_input" name="profesional_input"
                   placeholder="Juan Perez"
                   autofocus tabindex="1"
                   class="datalist"
                   required/>

            <datalist id="profesional-lista">
                <option value="Jose Garcia">
                <option value="Marcos Aguirre">
                <option value="Norberto Fontana">
            </datalist>

            <hr/>
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


            <input type="file"
                   id="file"
                   name="file"
                   accept="image/png, .jpeg, .jpg, image/gif"/>


            <hr/>


            <input type="submit" value="Solicitar"/>

            <i class="escoba-icon-24"> <input type="reset" value=" "/></i>
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