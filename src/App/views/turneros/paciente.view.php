<html>
    <head>
        <?php
            require __DIR__ . '/../parts/head.view.php';
        ?>
    </head>
    <body class="turneroPaciente-contenedor">
        <header> 

            <select id="turneroPaciente-selectPaciente" class="turneroButton">
                <option selected="true" disabled="disabled">Seleccione...</option>
                <option value="Leonardo Sequeira">Leonardo Sequeira</option>
                <option value="Joaquin Bert">Joaquin Bert</option>
                <option value="Melina Casanova">Melina Casanova</option>
                <option value="Clara Martinez">Clara Martinez</option>
                <option value="Diego Valenzuela">Diego Valenzuela</option>
            </select>

            <h2 id="turneroPaciente-paciente">-</h2>

            <button id="turneroPaciente-siguiente" class="turneroButton">Simular cambio de turno</button>

            <audio id="soundAlert" src="../assets/sounds/alert.mp3" preload="auto"></audio>
            
        </header>

        <main class="turneroPaciente">

            <a href="/turneros">Atrás</a>

            <section class="turnero-screen">
                <h3>Su turno es:</h3>
                <h2 id="turneroPaciente-nroTurno">-</h2>
            </section>

            <section>

                <table id="turnero-tabla">
                    <thead>
                        <tr>
                            <th>Profesional</th>
                            <th>Especialidad</th>
                            <th>Horario</th>
                            <th>Estado</th>
                            <th>Tiempo de Espera</th>
                        </tr>
                    </thead>
                    <tbody id="turnero-info"></tbody>                    
                </table>

            </section>
        </main>   

        <footer>
            <?php
                require __DIR__ . '/../parts/footer.view.php';
            ?>
        </footer>
    </body>
</html>