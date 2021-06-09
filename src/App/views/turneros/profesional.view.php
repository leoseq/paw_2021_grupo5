<html>
    <head>
        <?php
            require __DIR__ . '/../parts/head.view.php';
        ?>
    </head>
    <body class="turneroProfesional-contenedor">
        <header> 

            <select id="turneroProfesional-selectProfesional" class="turneroButton">
                <option selected="true" disabled="disabled">Seleccione...</option>
                <option value="Dr. Carlos Meza">Dr. Carlos Meza</option>
                <option value="Dra. Leticia Rojas">Dra. Leticia Rojas</option>
            </select>

            <h2 id="turneroProfesional-profesional">-</h2>
            
        </header>
        <main class="turneroProfesional">

            <a href="/turneros">Atrás</a>
            <button id="turneroProfesional-siguiente" class="turneroButton">Siguiente Turno</button>

            <section class="turnero-screen">
                <h3 id="turneroProfesional-nombreProfesional">-</h3>
                <h2 id="turneroProfesional-nroTurno">-</h2>
                <h3 id="turneroProfesional-nombrePaciente">-</h3>
            </section>


            <section class="turneroProfesional-lista">

                <table id="turnero-tabla">
                    <thead>
                        <tr>
                            <th>Nro de Turno</th>
                            <th>Paciente</th>
                            <th>Horario</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody id="turnero-listadoPacientes"></tbody>                    
                </table>

                <audio id="xyz" src="../assets/sounds/alert.mp3" preload="auto"></audio>
            </section>
        </main>   

        <footer>
            <?php
                require __DIR__ . '/../parts/footer.view.php';
            ?>
        </footer>
    </body>
</html>