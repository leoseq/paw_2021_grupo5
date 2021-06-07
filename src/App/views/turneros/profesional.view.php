<html>
    <head>
        <?php
            require __DIR__ . '/../parts/head.view.php';
        ?>
    </head>
    <body class="turneroProfesional-contenedor">
        <header> 

            <select id="turneroProfesional-selectProfesional">
                <option value="-">Seleccione..</option>
                <option value="Dr. Carlos Meza">Dr. Carlos Meza</option>
                <option value="Dra. Leticia Rojas">Dra. Leticia Rojas</option>
            </select>

            <h2 id="turneroProfesional-profesional">-</h2>
            <h3 id="turneroProfesional-especialidad">-</h3> 

            <button id="turneroProfesional-siguiente">Siguiente</button>
            
        </header>
        <main class="turneroProfesional">

            <section class="turneroProfesional-screen">
                <h3 id="turneroProfesional-nombreProfesional">-</h3>
                <h2 id="turneroProfesional-nroTurno">000</h2>
                <h3 id="turneroProfesional-nombrePaciente">-</h3>
            </section>


            <section class="turneroProfesional-lista">

                <table id="turneroProfesional-tablaPacientes">
                    <thead>
                        <tr>
                            <th>Nro de Turno</th>
                            <th>Paciente</th>
                            <th>Horario</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody id="turneroProfesional-listadoPacientes"></tbody>                    
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