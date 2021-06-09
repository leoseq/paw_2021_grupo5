class Calendario {

    constructor(pContenedor) {

        let diasTabla = this.diasSemana = [
            'Dom',
            'Lun',
            'Mar',
            'Mie',
            'Jue',
            'Vie',
            'Sab'
        ];

        let meses = this.meses = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ];


        let listadoTurnos = this.listadoTurnos =
            {
                "especialistas": [
                    {
                        "matricula": "3737",
                        "nombre": "Tekito",
                        "apellido": "Lakarie",
                        "especialidad": "Odontologia",
                        "diasQueAtiende": [
                            "Lunes",
                            "Martes",
                            "Jueves"
                        ],
                        "horarioInicio": {
                            "horas": 9,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 12,
                            "minutos": 0
                        },
                        "duracionTurno": 20,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 9,
                                "minutos": 0
                            },
                            {
                                "dia": "Lunes",
                                "horas": 9,
                                "minutos": 20
                            },
                            {
                                "dia": "Martes",
                                "horas": 10,
                                "minutos": 0
                            },
                            {
                                "dia": "Martes",
                                "horas": 10,
                                "minutos": 40
                            },
                            {
                                "dia": "Martes",
                                "horas": 11,
                                "minutos": 20
                            },
                            {
                                "dia": "Jueves",
                                "horas": 9,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 9,
                                "minutos": 20
                            },
                            {
                                "dia": "Jueves",
                                "horas": 10,
                                "minutos": 40
                            },
                            {
                                "dia": "Jueves",
                                "horas": 11,
                                "minutos": 40
                            }
                        ]
                    },
                    {
                        "matricula": "2222",
                        "nombre": "Tarayado",
                        "apellido": "Tukoko",
                        "especialidad": "Psicologia",
                        "diasQueAtiende": [
                            "Martes",
                            "Jueves",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 13,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 18,
                            "minutos": 0
                        },
                        "duracionTurno": 30,
                        "turnosTomados": [
                            {
                                "dia": "Martes",
                                "horas": 14,
                                "minutos": 0
                            },
                            {
                                "dia": "Martes",
                                "horas": 14,
                                "minutos": 30
                            },
                            {
                                "dia": "Martes",
                                "horas": 16,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Jueves",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 17,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 13,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 30
                            }
                        ]
                    },
                    {
                        "matricula": "20202",
                        "nombre": "Tekuro",
                        "apellido": "Lakria",
                        "especialidad": "Pediatria",
                        "diasQueAtiende": [
                            "Lunes",
                            "Jueves",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 10,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 14,
                            "minutos": 0
                        },
                        "duracionTurno": 25,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 11,
                                "minutos": 15
                            },
                            {
                                "dia": "Lunes",
                                "horas": 11,
                                "minutos": 40
                            },
                            {
                                "dia": "Lunes",
                                "horas": 12,
                                "minutos": 30
                            },
                            {
                                "dia": "Jueves",
                                "horas": 10,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 12,
                                "minutos": 55
                            },
                            {
                                "dia": "Viernes",
                                "horas": 13,
                                "minutos": 20
                            }
                        ]
                    },
                    {
                        "matricula": "9595",
                        "nombre": "Isee",
                        "apellido": "Deadpeople",
                        "especialidad": "Cardiologia",
                        "diasQueAtiende": [
                            "Lunes",
                            "Miercoles",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 15,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 18,
                            "minutos": 0
                        },
                        "duracionTurno": 10,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 0
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 10
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 20
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 50
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 15,
                                "minutos": 50
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 15,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 40
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 50
                            },
                            {
                                "dia": "Viernes",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 17,
                                "minutos": 30
                            }
                        ]
                    }
                ]
            }

        let contenedor = pContenedor.tagName ? pContenedor : document.querySelector(pContenedor);

        if (contenedor) {
            // Inserto CSS
            let css = Clinica.nuevoElemento("link", "", {
                rel: "stylesheet",
                href: "../assets/js/components/styles/calendario.css",
            });
            document.head.appendChild(css);

            let listaProfesionales = contenedor.querySelector("#profesional-lista");

            //Carga de profesionales y especialidades
            listadoTurnos.especialistas.forEach(element => {
                let nuevoProfesional = Clinica.nuevoElemento("option", element.especialidad, {
                    "id": element.matricula,
                    "value": element.nombre + " " + element.apellido
                })
                listaProfesionales.appendChild(nuevoProfesional);
            });



            //
            let profesionalInput = document.querySelector('#profesional_input');
            let especialidadInput = document.querySelector('#specialty_input');

            let fechaTurnoInput = document.querySelector('#turn_date_input');

            //CUANDO HAY UN CAMBIO DE PROFESIONAL
            profesionalInput.addEventListener('change', event => {

                fechaTurnoInput.addEventListener("click", evento => {
                    let eCalendario = contenedor.querySelector("#diasQueAtiende");

                    if (eCalendario) {
                        contenedor.removeChild(eCalendario);
                    }

                    //Selecciono el input de profesionales
                    let profesional = this.getProfesional(listaProfesionales, event.srcElement.value);

                    especialidadInput.value = profesional.innerText;

                    //Se carga la tabla con los dias que atiende
                    this.cargarTabla(profesional, contenedor);

                    let diasTurno = contenedor.querySelectorAll(".turno");

                    let tablaCalendario = contenedor.querySelector("#diasQueAtiende");


                    let profesionalTurno;
                    for (let i = 0; i < diasTurno.length; i++) {
                        diasTurno[i].addEventListener("click", event => {
                            profesionalTurno = this.get(profesional.id);
                            this.mostrarTurnos(diasTurno[i], profesionalTurno, contenedor);
                            tablaCalendario.style.display = 'none';

                        });
                    }




                })

            });


        }
    }

    get(matricula) {
        let profesional;
        this.listadoTurnos.especialistas.forEach(objeto => {
            if (objeto.matricula === matricula) {
                profesional = objeto;
            }
        });
        return profesional
    }

    getProfesional(profesionalLista, matricula) {
        let profesionalSeleccionado = profesionalLista.querySelector('[value="' + matricula + '"]');
        return profesionalSeleccionado
    }

    cargarTabla(profesionalSeleccionado, contenedor) {

        let calendario = Clinica.nuevoElemento("div", "", {"id": "diasQueAtiende", "class": "calendar"})
        contenedor.appendChild(calendario);


        this.listadoTurnos.especialistas.forEach(especialista => {
            if (especialista.matricula === profesionalSeleccionado.id) {
                var date = new Date();
                let mes = date.getMonth();
                let anio = date.getFullYear();
                let dia = date.getDate();

                var date = new Date();
                var firstdom = new Date(anio, mes, 1).getDay()
                var lastdom = new Date(anio, mes + 1, 0).getDate()
                var prevlastdom = mes == 0 ? new Date(anio - 1, 11, 0).getDate() : new Date(anio, mes, 0).getDate();

                // Creo boton para cerrar
                let boton = Clinica.nuevoElemento("button", "Cerrar", {
                    id: "regresarForm",
                    class: "BotonCerrar",
                });

                //Creo la tabla del calendario e inserto la cabecera donde muestra el mes
                let tablaCalendario = Clinica.nuevoElemento("table", "", {class: 'TableCalendario'});
                let thead = Clinica.nuevoElemento("thead", "");
                let tr = Clinica.nuevoElemento("tr", "");
                let tdMes = Clinica.nuevoElemento("td", this.meses[mes] + ' ' + anio, {"colspan": 7});

                tablaCalendario.appendChild(thead);
                thead.appendChild(tr);
                thead.prepend(boton);
                tr.appendChild(tdMes);

                //Inserto los nombres de los dias de la semana
                let trDiasSemana = Clinica.nuevoElemento("tr", "");
                tablaCalendario.appendChild(trDiasSemana);

                for (var i = 0; i < this.diasSemana.length; i++) {
                    let tdDia = Clinica.nuevoElemento("td", this.diasSemana[i]);
                    trDiasSemana.appendChild(tdDia)
                }


                //Comienzo a inserta los dias (Numeros)
                //Este fila es para la primera semana
                let trSemanaN = Clinica.nuevoElemento("tr", "", {"id": "semana1"});
                tablaCalendario.appendChild(trSemanaN);

                //Inicializo variables que voy a utilizar mas adelante en el control de semana y dias de turno.
                let semana = 1;
                let contadorSemana;
                let postSabado;

                var i = 1;
                do {

                    //Chequeo para saber dias del mes anterior en la primera semana
                    var diasMesAnterior = new Date(anio, mes, i).getDay();

                    if (diasMesAnterior == 0) {
                        //html += '<tr>';
                    } else if (i == 1) {

                        var completarMes = prevlastdom - firstdom + 1;
                        for (var j = 0; j < firstdom; j++) {
                            let tdNotToday = Clinica.nuevoElemento("td", completarMes, {class: "not-today"});
                            trSemanaN.appendChild(tdNotToday);
                            completarMes++;
                        }
                    }

                    var dateAct = new Date();
                    var anioAct = dateAct.getFullYear();
                    var mesAct = dateAct.getMonth();

                    //Se agregar los dias del mes
                    //Ingresa al if cuando se el dia actual, en el else agrega el resto de los dias
                    if (anioAct == anio && mesAct == mes && i == dia) {
                        let tdToday = Clinica.nuevoElemento("td", i, {class: "today"});
                        trSemanaN = tablaCalendario.querySelector('#semana' + semana + '');
                        trSemanaN.appendChild(tdToday);
                        contadorSemana = 0;
                        postSabado = 0;

                    } else {
                        let tdToday = Clinica.nuevoElemento("td", i, {class: "normal"});
                        //Control para colocar turnos dentro de la semana, a partir del dia actual
                        if ((contadorSemana < 7) && (contadorSemana >= 0)) {
                            contadorSemana++;
                            for (var h = 0; h <= especialista.diasQueAtiende.length; h++) {
                                var day;
                                var atiende = true;
                                switch (new Date().getDay() + contadorSemana - postSabado) {
                                    case 0:
                                        day = "Domingo";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 1:
                                        day = "Lunes";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 2:
                                        day = "Martes";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 3:
                                        day = "Miercoles";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 4:
                                        day = "Jueves";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 5:
                                        day = "Viernes";
                                        postSabado = 0 ? 0 : postSabado++;
                                        break;
                                    case 6:
                                        day = "Sabado";
                                        postSabado = contadorSemana + 3;
                                        break;
                                }


                                if ((day === especialista.diasQueAtiende[h]) && (atiende)) {
                                    tdToday = Clinica.nuevoElemento("td", i, {"id": day, class: "turno"});
                                    tdToday.atiende = false;
                                }
                            }
                        }

                        trSemanaN = tablaCalendario.querySelector('#semana' + semana + '');
                        trSemanaN.appendChild(tdToday);

                    }
                    //Se agregan los dias del siguiente mes, para completar la semana
                    if (diasMesAnterior == 6) {
                        let tr2 = Clinica.nuevoElemento("tr", "", {"id": 'semana' + i});
                        tablaCalendario.appendChild(tr2);
                        semana = i;
                    } else if (i == lastdom) {
                        var k = 1;
                        for (diasMesAnterior; diasMesAnterior < 6; diasMesAnterior++) {
                            let tdNotToday = Clinica.nuevoElemento("td", k, {class: "not-today"});
                            trSemanaN.appendChild(tdNotToday);
                            k++;
                        }
                    }

                    i++;
                }
                while (i <= lastdom);

                calendario.appendChild(tablaCalendario);
            }

        });

        this.regresarForm(calendario);
    }


    mostrarTurnos(dia, especialista, contenedor) {

        let eTurnos = contenedor.querySelector("#horariosAtencion");

        if (eTurnos) {
            contenedor.removeChild(eTurnos);
        }


        let tablaTurnos = Clinica.nuevoElemento("table", "", {class: 'TableCalendario'});

        // Creo boton para cerrar
        let boton = Clinica.nuevoElemento("button", "Regresar al calendario", {
            id: "regresarCalendario",
            class: "BotonCerrar",
        });
        //Se crea la cabecera con el dia del turno
        let thead = Clinica.nuevoElemento("thead", "");
        let diaTurno = Clinica.nuevoElemento("tr", "");
        let tdDia = Clinica.nuevoElemento("td", dia.id, {"colspan": 2});

        tablaTurnos.appendChild(thead);
        thead.appendChild(diaTurno);
        thead.prepend(boton);
        diaTurno.appendChild(tdDia);


        //Se agrega a la tabla las columnas: Horarios y Disponibilidad
        let trTable = Clinica.nuevoElemento("tr", "", {class: "horarios"});
        tablaTurnos.appendChild(trTable);
        let tdHorarios = Clinica.nuevoElemento("td", "Horario");
        let tdEstado = Clinica.nuevoElemento("td", "Disponibilidad");
        trTable.appendChild(tdHorarios)
        trTable.appendChild(tdEstado)


        //Se transforma a Date, la fecha de inicio y finalizacion de atencion
        let dIndex = new Date();
        dIndex.setHours(especialista.horarioInicio["horas"]);
        dIndex.setMinutes(especialista.horarioInicio["minutos"]);

        let dFin = new Date();
        dFin.setHours(especialista.horarioFinalizacion["horas"]);
        dFin.setMinutes(especialista.horarioFinalizacion["minutos"]);


        //Se completa la tabla con los horarios
        while (dIndex <= dFin) {
            let tr = Clinica.nuevoElemento("tr", "", {
                "id": dIndex.getHours() + ':' + dIndex.getMinutes(),
                class: "libre"
            });
            let thHora = Clinica.nuevoElemento("td", dIndex.getHours() + ':' + dIndex.getMinutes(), {
                hora: dIndex.getHours(),
                min: dIndex.getMinutes()
            });
            tr.appendChild(thHora);

            //Carga de turnos
            especialista.diasQueAtiende.forEach(obj => {
                if (obj === dia.id) {
                    let diaTurno = Clinica.nuevoElemento("td", "Libre", {
                        dia: obj,
                        fecha: dia.innerText,
                        hora: dIndex.getHours(),
                        min: dIndex.getMinutes(),
                        estado: "libre",
                    });

                    tr.appendChild(diaTurno);
                }
            });

            tablaTurnos.appendChild(tr);

            //Sumo la duracion del turno para el siguiente
            dIndex.setMinutes(dIndex.getMinutes() + especialista.duracionTurno);
        }

        let horariosAtencion = Clinica.nuevoElemento("div", "", {"id": "horarioAtencion", "class": "calendar"})
        contenedor.appendChild(horariosAtencion);

        horariosAtencion.appendChild(tablaTurnos);

        //Se recorre la tabla anterior y se le asigna Ocupado a los turnos que no estan disponibles
        especialista.turnosTomados.forEach(obj => {
            if (obj['dia'] === dia.id) {
                let dia = obj['dia'];
                let hora = obj['horas'];
                let minutos = obj['minutos'];
                let selector = "td[dia='" + dia + "'][hora='" + hora + "'][min='" + minutos + "']";
                let selector2 = "tr[id='" + hora + ':' + minutos + "']";
                //TODO: MODIFICAR TURNO 2
                let turno = tablaTurnos.querySelector(selector);
                let turno2 = tablaTurnos.querySelector(selector2);
                turno.textContent = "Ocupado";
                turno.setAttribute("estado", "Ocupado");
                turno2.classList.add("ocupado")
                turno2.classList.remove("libre")
            }
        });

        this.regresarCalendario(horariosAtencion);
        this.obtenerTurno();

    }

    obtenerTurno(){
        let turnosLibres = document.querySelectorAll(".libre");
        for (let i = 0; i < turnosLibres.length; i++) {
            turnosLibres[i].addEventListener("click", event => {
               let datos = turnosLibres[i].querySelector('[estado="libre"]');
                let fechaTurnoInput = document.querySelector('#turn_date_input');
                document.querySelector("#horarioAtencion").style.display = 'none';

                var fecha = new Date(); //Fecha actual
                var mes = fecha.getMonth()+1; //obteniendo mes
                var dia = datos.getAttribute("fecha"); //obteniendo dia
                var ano = fecha.getFullYear(); //obteniendo año
                var hora = datos.getAttribute("hora"); //obteniendo hora
                var minutos = datos.getAttribute("min"); //obteniendo minuto

               fechaTurnoInput.value=ano+"-"+minTwoDigits(mes)+"-"+minTwoDigits(dia)+"T"+minTwoDigits(hora)+":"+minTwoDigits(minutos);


            function minTwoDigits(n) {
                return (n < 10 ? '0' : '') + n;
            }

            this.removeHorarios();

            });
        }
    }

    removeHorarios(){
        let sectionTurnos = document.querySelector("#sectionTurno");
        sectionTurnos.removeChild(document.querySelector("#horarioAtencion"));
    }

    regresarForm(tablaCalendario) {
        let buttonRegresarForm = tablaCalendario.querySelector("#regresarForm");
        buttonRegresarForm.addEventListener("click", event => {
            tablaCalendario.style.display = 'none';

        });
    }

    regresarCalendario(tablaHorarios) {
        let buttonRegresarCalendario = tablaHorarios.querySelector("#regresarCalendario");
        buttonRegresarCalendario.addEventListener("click", event => {

            tablaHorarios.style.display = 'none';
            let tablaCalendario = document.querySelector("#diasQueAtiende");
            tablaCalendario.style.display = 'block';
        });
    }


}
