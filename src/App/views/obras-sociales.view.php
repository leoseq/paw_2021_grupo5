<html>
    <head>
        <title>Obras Sociales</title>
    </head>
    <body>
        <h1>Pagina de Obras Sociales</h1>
        <?php
            require __DIR__ . '/parts/nav.view.php';
        ?>

        <?php if ($procesado) : ?> 

            <div>
                Mail recibido con Exito.!
            </div>

        <?php endif ?> 

        <form action="/obras_sociales" method="POST">
        <label for="correo">Correo*:</label>
        <input type="text" name="correo">

        <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>