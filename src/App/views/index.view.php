<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Leonardo Sequeira - Joaquin Bert" />
    <meta name="description" content="UNLuPAW Medical Group - Home" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UNLuPAW Medical Group - Home</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    <link rel="stylesheet" href="../css/iconos.css" type="text/css" />
  </head>
  <body>
    <header>
      <a href="index.html">
        <picture>
          <source media="(min-width:3840px)" srcset="/imagenes/logo.png" />
          <img alt="UNLuPAW Medical Group" src="/images/logo.png" />
        </picture>
      </a>
      <?php
        require 'parts/nav.view.php';
    ?>
      <a href="login.html" class="btn-iniciarSesion">Iniciar Sesión</a>
    </header>

    <main class="homeContainer">
      <section class="serviciosMedicos">
        <h2>
          <span class="ambulancia-icon-36"></span>
          <span class="stethoscope-icon-36"></span>
          Servicios Médicos
        </h2>

        <hr />
        <input
          type="search"
          placeholder="Buscar un profesional o una especialidad"
        />

        <h3>Servicios médicos mas buscados</h3>

        <section>
          <header>
            <h4>Especialidades</h4>
          </header>

          <article>
            <header>
              <h4>Especialidades</h4>
            </header>
            <p>1 - Cardiología</p>
            <p>2 - Ortopedia y Traumatología</p>
            <p>3 - Cirugía Cardiovascular</p>
            <p>4 - Ginecología</p>
            <p>5 - Cirugía General</p>
            <p>6 - Oncología</p>
          </article>
        </section>

        <section>
          <header>
            <h4>Profesionales</h4>
          </header>
          <article>
            <header>
              <h4>Profesionales</h4>
            </header>
            <p>1 - Juan Pérez</p>
            <p>2 - José Gómez</p>
            <p>3 - Julio Rodríguez</p>
            <p>4 - Marcos González</p>
            <p>5 - Martin Peña</p>
            <p>6 - Franco Martínez</p>
          </article>
        </section>
      </section>

      <section class="cardDatos">
        <header>
          <h2>Contactenos</h2>
        </header>

        <article>
          <header>
            <h3>Vias de comunicación</h3>
          </header>
          <address>
            <span class="ubicacion-icon-36"></span>
            El Grito de Alcorta Nº 110, B6620 Chivilcoy, Provincia de Buenos
            Aires
          </address>

          <a href="tel:+2364537977">
            <span class="telefono-icon-36"></span>
            11 1234-5678 - Atención telefónica las 24hs
          </a>
          <a href="mailto:joaco_39@hotmail.com">
            <span class="email-icon-36"></span>
            Email
          </a>
        </article>

        <article>
          <header>
            <h3>¿Como llegar?</h3>
          </header>
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.5370467199264!2d-59.997247785128664!3d-34.91806578170451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bea4e589b2b9f5%3A0x68f19a3e57a9870c!2sUniversidad%20Nacional%20de%20Luj%C3%A1n%20-%20Centro%20Regional%20Chivilcoy!5e0!3m2!1ses!2sar!4v1620135639452!5m2!1ses!2sar" width="354" height="338" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
        </article>
      </section>

      <section class="turnero-flotante">
        <header>
          <h2>Turnos</h2>
        </header>
        <ul class="menu-turnero" data-animation="to-top">
          <li>
            <a href="solicitarTurno.html">
              <span class="sacar-turno-icon-50"></span>
              <span>Nuevo Turno</span>
            </a>
          </li>
          <hr />
          <li>
            <a href="listadoTurnos.html">
              <span class="listado-turnos-icon-50"></span>

              <span>Listar Turnos</span>
            </a>
          </li>
        </ul>
      </section>

      <section class="cardNoticias">
        <header>
          <h2>Ultimas noticias</h2>
        </header>

        <img alt="Noticia" src="/images/noticias/noticia_1.jpg" />
        <article>
          <h2>Titulo noticia</h2>
          <a href="noticia.html" style="color: black"
            ><p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              eiusmod tempor incidunt ut labore et dolore magna aliqua...Lorem
              ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod
              tempor incidunt ut labore et dolore magna aliqua...Lorem ipsum
              dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
              incidunt ut labore et dolore magna aliqua...
            </p></a
          >
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

      <a href="tel:+2364537977" class="btn-flotante">
        <span class="telefono-icon-28"></span
      ></a>

      <nav class="navbar">
        <a href="index.html"><span class="home-icon-40"></span>Inicio</a>
        <a href="profesionales.html"
          ><span class="profesionales-icon-40"></span>Profesionales</a
        >
        <a href="noticias.html"
          ><span class="noticias-icon-40"></span>Noticias</a
        >
        <a href="obrasSociales.html"
          ><span class="obras-sociales-icon-40"></span>Obras Sociales</a
        >
      </nav>
    </main>

    <footer>
      <nav>
        <a href="https://www.facebook.com/" style="background: #4f2c7f"
          ><span class="facebook-icon-24"></span
        ></a>
        <a href="https://www.instagram.com/" style="background: #4f2c7fa1"
          ><span class="instagram-icon-24"></span
        ></a>
        <a href="https://twitter.com/" style="background: #4f2c7f61"
          ><span class="twitter-icon-24"></span
        ></a>
      </nav>

      <section>
        <h2>Footer</h2>
        <article>
          <h3>Información de contacto</h3>

          <address>
            <span class="ubicacion-icon-24"></span> El Grito de Alcorta Nº 110,
            B6620 Chivilcoy, Provincia de Buenos Aires
          </address>
          <a href="tel:+2364537977" style="color: #ffffff"
            ><span class="telefono-icon-24"></span> Teléfono: 02345-485562
          </a>
        </article>

        <a href="/src/index.html"
          ><img alt="UNLuPAW Medical Group" src="/images/logo-white.png"
        /></a>
      </section>
    </footer>
  </body>
</html>
