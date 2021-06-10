class TurneroSalaEsperaAutomatica {

    constructor(pContenedor) {

        let strProfesional
        this.listadoTurnos = [
            {
                "profesional": "Dr. Carlos Meza",
                "matricula": "1994",
                "especialidad": "Cardiología",
                "turnos": [
                    {
                        "paciente": "Leonardo Sequeira",
                        "nroTurno": 1,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 9,
                            "minutos": 0
                        }
                    },
                    {
                        "paciente": "Joaquin Bert",
                        "nroTurno": 2,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 9,
                            "minutos": 15
                        }
                    },
                    {
                        "paciente": "Melina Casanova",
                        "nroTurno": 4,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 9,
                            "minutos": 30
                        }
                    }
                ]
            },
            {
                "profesional": "Dra. Leticia Rojas",
                "matricula": "3300",
                "especialidad": "Dermatología",
                "turnos": [
                    {
                        "paciente": "Clara Martinez",
                        "nroTurno": 3,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 9,
                            "minutos": 30
                        }
                    },
                    {
                        "paciente": "Diego Valenzuela",
                        "nroTurno": 5,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 10,
                            "minutos": 0
                        }
                    }
                ]
            },


            {
                "profesional": "Dra. Maria Gonzalez",
                "matricula": "2502",
                "especialidad": "Odontología",
                "turnos": [
                    {
                        "paciente": "Juan Martinez",
                        "nroTurno": 1,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 9,
                            "minutos": 30
                        }
                    },
                    {
                        "paciente": "Andres Ross",
                        "nroTurno": 2,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 10,
                            "minutos": 0
                        }
                    },
                    {
                        "paciente": "Franco Romero",
                        "nroTurno": 3,
                        "estado": "pendiente",
                        "horario": {
                            "horas": 10,
                            "minutos": 0
                        }
                    }
                ]
            }
        ];

        // Obtener el Nodo Contenedor
        let contenedor = pContenedor.tagName
            ? pContenedor
            : document.querySelector(pContenedor);

        if (contenedor) {

            // Inserto CSS
            let css = Clinica.nuevoElemento("link", "", {
                rel: "stylesheet",
                href: "../assets/js/components/styles/turnero.css"
            });
            document.head.appendChild(css);

            this.cargarTabla();

            // Cambio de Profesional
            let tableProf = document.querySelectorAll(".tablaSalaEspera");

            let button = document.querySelector("#turneroProfesional-siguiente");

            let totalTurnos = true;
            let soundAlert = document.getElementById('soundAlert');

            button.addEventListener("click", event => {
                strProfesional = this.getProfesional(tableProf, totalTurnos);
                let tieneTurnos = this.siguienteTurno(strProfesional);
                soundAlert.play();

                if (totalTurnos) {
                    setInterval(() => {
                        strProfesional = this.getProfesional(tableProf, totalTurnos);
                        tieneTurnos = this.siguienteTurno(strProfesional);
                        if (tieneTurnos) {
                            this.finalizarTurno(strProfesional);
                            soundAlert.play();
                        }
                    }, 10000);
                }
            })




        }
    }


    cargarTabla() {

        let section = document.querySelector(".turnero-tablas");
        let tablaCalendario
        this.listadoTurnos.forEach(especialistas => {
            tablaCalendario = Clinica.nuevoElemento("table", "", {
                id: especialistas.matricula,
                estado: "atendiendo",
                class: "tablaSalaEspera"
            });
            section.appendChild(tablaCalendario);
            let thead = Clinica.nuevoElemento("thead", "");
            let tr = Clinica.nuevoElemento("tr", "");
            let tdMes = Clinica.nuevoElemento("td", especialistas.profesional);
            tablaCalendario.appendChild(thead);
            thead.appendChild(tr);
            tr.appendChild(tdMes);


            for (var i = 0; i < especialistas.turnos.length; i++) {

                let trDiasSemana = Clinica.nuevoElemento("tr", "");
                tablaCalendario.appendChild(trDiasSemana);
                let tdDia = Clinica.nuevoElemento("td", "00" + especialistas.turnos[i].nroTurno, {id: especialistas.matricula + "-00" + especialistas.turnos[i].nroTurno});
                trDiasSemana.appendChild(tdDia)
            }


        });


    }


    siguienteTurno(strProfesional) {

        let turnos = this.getTurnosByProfesional(strProfesional.id);
        let turno = this.proximoTurno(turnos);

        if (!(Object.keys(turno).length === 0)) {
            let nombreProfesional = strProfesional.querySelector("thead tr td");
            let idTD = strProfesional.id + "-00" + turno.nroTurno;
            this.turnoTabla(idTD);
            document.getElementById("turneroProfesional-nombreProfesional").innerHTML = nombreProfesional.innerText;
            document.getElementById("turneroProfesional-nroTurno").innerHTML = this.concatenarTurno(turno.nroTurno);
            document.getElementById("turneroProfesional-nombrePaciente").innerHTML = turno.paciente;
            return true;
        } else {
            document.getElementById("turneroProfesional-nombreProfesional").innerHTML = "-";
            document.getElementById("turneroProfesional-nroTurno").innerHTML = "-";
            document.getElementById("turneroProfesional-nombrePaciente").innerHTML = "-";
            console.error("El " + strProfesional.id + " no tiene mas pacientes.");
            strProfesional.estado = 'terminado';
            return false;
        }
    }

    turnoTabla(idTD) {
        let tdTurno = document.getElementById(idTD.toString());
        tdTurno.classList.add('atendido');

    }

    concatenarTurno(nroTurno) {

        let size = nroTurno.length;
        let result = "";

        if (size = 1) {
            result = "00" + nroTurno;
        } else {
            if (length = 2) {
                result = "0" + nroTurno;
            } else {
                result = nroTurno;
            }
        }

        return result
    }


    proximoTurno(turnos) {

        let result = {};
        let index;
        let size = turnos.length;

        for (index = 0; index < size; index++) {

            if (turnos[index].estado == "pendiente") {
                result = turnos[index];
                break;
            }
        }

        return result;
    }

    finalizarTurno(strProfesional) {

        let turnos = this.getTurnosByProfesional(strProfesional.id);
        let turno = this.proximoTurno(turnos);

        let index;
        let indexTurno;

        let listado = this.listadoTurnos;
        let size = listado.length;
        let sizeTurno;

        for (index = 0; index < size; index++) {

            if (listado[index].matricula == strProfesional.id) {

                sizeTurno = listado[index].turnos.length;

                for (indexTurno = 0; indexTurno < sizeTurno; indexTurno++) {

                    if (listado[index].turnos[indexTurno].estado == "pendiente") {
                        listado[index].turnos[indexTurno].estado = "finalizado";
                        break;
                    }
                }
            }
        }

    }

    getTurnosByProfesional(strProfesional) {

        let index;
        let listado = this.listadoTurnos;
        let size = listado.length;
        let turnos = [];

        for (index = 0; index < size; index++) {
            if (listado[index].matricula == strProfesional) {
                turnos = listado[index].turnos;
                break;
            }
        }

        return turnos;
    }

    getInfoByProfesional(strProfesional) {

        let info = {};
        let index;
        let listado = this.listadoTurnos;
        let size = listado.length;

        for (index = 0; index < size; index++) {
            if (listado[index].matricula == strProfesional) {
                info = listado[index];
                break;
            }
        }

        return info;
    }

    getProfesional(tableProf, totalTurnos) {

        let index = 0;
        for (var i = 0; i < tableProf.length; i++) {
            if (tableProf[i].estado == "terminado") {
                index++
            }
        }

        let random = this.numeroAleatorio(0, tableProf.length - 1);

        if ((tableProf[random].estado != 'terminado') && index != tableProf.length) {
            return tableProf[random];
        } else if (index == tableProf.length) {
            totalTurnos = false;
        } else {
            this.getProfesional(tableProf, totalTurnos);
        }

    }

    numeroAleatorio(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }


    limpiarTabla() {
        let tabla = document.querySelector("#turneroProfesional-tablaPacientes");
        let bodyTabla = document.querySelector("#turneroProfesional-listadoPacientes");

        if (bodyTabla) {
            bodyTabla.remove();
        }
        bodyTabla = Clinica.nuevoElemento("tbody", "", {
            id: "turneroProfesional-listadoPacientes"
        });

        if (tabla) {
            tabla.appendChild(bodyTabla);
        }

        return bodyTabla;
    }

    completeTabla(strProfesional) {

        let bodyTabla = this.limpiarTabla();

        let turnos = this.getTurnosByProfesional(strProfesional);
        let size = turnos.length;
        let index;

        for (index = 0; index < size; index++) {

            let row = Clinica.nuevoElemento("tr", "", {});
            bodyTabla.appendChild(row);

            let nroTurno = this.concatenarTurno(turnos[index].nroTurno);
            let paciente = turnos[index].paciente;
            let horario = turnos[index].horario.horas + ":" + turnos[index].horario.minutos;
            let estado = turnos[index].estado;

            let data_1 = Clinica.nuevoElemento("td", nroTurno, {});
            let data_2 = Clinica.nuevoElemento("td", paciente, {});
            let data_3 = Clinica.nuevoElemento("td", horario, {});
            let data_4 = Clinica.nuevoElemento("td", estado, {});

            row.appendChild(data_1);
            row.appendChild(data_2);
            row.appendChild(data_3);
            row.appendChild(data_4);
        }
    }

}
