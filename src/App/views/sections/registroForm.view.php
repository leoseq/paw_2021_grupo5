<section class="sectionForm">
    <header>
        <h2>Registrarse</h2>
    </header>

    <hr />

    <form>
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

        <label for="password_input">Contraseña: </label>
        <input
            type="password"
            name="password_input"
            id="password_input"
            placeholder="***********"
            required
        />

        <input type="submit" value="Registrate" />
    </form>

    <hr />

    <h4>¿Tenés cuenta en UNLuPAW Medical Group?</h4>

    <a href="/login">Iniciar sesión</a>
</section>