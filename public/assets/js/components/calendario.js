class Calendario {

    constructor(pContenedor) {

        let diasTabla = this.wd = [
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

            let profesionalLista = contenedor.querySelector("#profesional-lista");

            //Carga de profesionales y especialidades
            listadoTurnos.especialistas.forEach(element => {
                //  let nuevaEspecialidad = Clinica.nuevoElemento("option", "", {"value": listadoTurnos.especialistas[index].especialidad})
                let nuevoProfesional = Clinica.nuevoElemento("option", element.especialidad, {
                    "id": element.matricula,
                    "value": element.nombre + " " + element.apellido
                })
                //especialidadLista.appendChild(nuevaEspecialidad);
                profesionalLista.appendChild(nuevoProfesional);
            });
            //let especialidadLista = contenedor.querySelector("#especialidad-lista");


            //
            let profesionalInput = document.querySelector('#profesional_input');
            //CUANDO HAY UN CAMBIO DE PROFESIONAL
            profesionalInput.addEventListener('change', event => {

                let eCalendario = contenedor.querySelector("#diasQueAtiende");

                if (eCalendario) {
                    contenedor.removeChild(eCalendario);
                }

                //Selecciono el input de profesionales
                let profesional = this.getProfesional(profesionalLista, event.srcElement.value);
                this.cargarTabla(profesional, contenedor);

                let a = contenedor.querySelectorAll(".turno");
                let profesionalTurno;
                for (let i = 0; i < a.length; i++) {
                    a[i].addEventListener("click", event => {
                    profesionalTurno = this.get(profesional.id);
                    this.mostrarTurnos(a[i].id, profesionalTurno,contenedor);

                    });
                }




            });


        }
    }

    get(matricula){
        let profesional;
        this.listadoTurnos.especialistas.forEach(objeto => {
            if(objeto.matricula === matricula) {
                profesional = objeto;
            }
        });
        return profesional
    }


    mostrarTurnos(dia, especialista,contenedor) {
        console.log(dia);

        //recorrer dias que atiende.
        let nuevaTabla = Clinica.nuevoElemento("table", "", {class: 'TableCalendario'});

        let diasAtiende = Clinica.nuevoElemento("tr", "");

        nuevaTabla.appendChild(diasAtiende);

        let dIndex = new Date();

        dIndex.setHours(especialista.horarioInicio["horas"]);
        dIndex.setMinutes(especialista.horarioInicio["minutos"]);

        let dFin = new Date();
        dFin.setHours(especialista.horarioFinalizacion["horas"]);
        dFin.setMinutes(especialista.horarioFinalizacion["minutos"]);


        while (dIndex <= dFin) {
            let tr = Clinica.nuevoElemento("tr", "", {class: dIndex.getHours() + ':' + dIndex.getMinutes()});
            let thHora = Clinica.nuevoElemento("th", dIndex.getHours() + ':' + dIndex.getMinutes(), {
                hora: dIndex.getHours(),
                min: dIndex.getMinutes()
            });
            tr.appendChild(thHora);

            //carga de turnos
            especialista.diasQueAtiende.forEach(obj => {
                if (obj === dia) {
                    let diaTurno = Clinica.nuevoElemento("td", "libre", {
                        dia: obj,
                        hora: dIndex.getHours(),
                        min: dIndex.getMinutes(),
                        estado: "libre"
                    });

                    tr.appendChild(diaTurno);
                }

            });

            nuevaTabla.appendChild(tr);

            dIndex.setMinutes(dIndex.getMinutes() + especialista.duracionTurno);
        }

        let calendario = Clinica.nuevoElemento("div", "", {"id": "diasQueAtiendeeeee", "class": "calendar"})
        contenedor.appendChild(calendario);

        calendario.appendChild(nuevaTabla);

        especialista.turnosTomados.forEach(obj => {
            if (obj['dia'] === dia) {
                let dia = obj['dia'];
                let hora = obj['horas'];
                let minutos = obj['minutos'];
                let selector = "td[dia='" + dia + "'][hora='" + hora + "'][min='" + minutos + "']";
                let turno = nuevaTabla.querySelector(selector);
                turno.setAttribute("estado", "ocupado");
                turno.textContent = "Ocupado";
            }
        });


    }


    getProfesional(profesionalLista, id) {
        let profesionalSeleccionado = profesionalLista.querySelector('[value="' + id + '"]');
        return profesionalSeleccionado
    }

    cargarTabla(profesionalSeleccionado, contenedor) {

        let calendario = Clinica.nuevoElemento("div", "", {"id": "diasQueAtiende", "class": "calendar"})
        contenedor.appendChild(calendario);


        this.listadoTurnos.especialistas.forEach(especialista => {
            if (especialista.matricula === profesionalSeleccionado.id) {
                //ARMAR TABLE CON DATOS DE LOS DIAS Y HORARIOS DE ATENCION
                //SABER QUE HORARIOS ESTAN OCUPADOS
                var date = new Date();
                let m = date.getMonth();
                let y = date.getFullYear();
                let d = date.getDate();

                console.log(especialista.diasQueAtiende)


                var date = new Date()
                    , firstdom = new Date(y, m, 1).getDay()
                    , lastdom = new Date(y, m + 1, 0).getDate()
                    , prevlastdom = m == 0 ? new Date(y - 1, 11, 0).getDate() : new Date(y, m, 0).getDate();


                let nuevaTabla = Clinica.nuevoElemento("table", "", {class: 'TableCalendario'});
                let thead = Clinica.nuevoElemento("thead", "");
                let tr = Clinica.nuevoElemento("tr", "");
                let tdMES = Clinica.nuevoElemento("td", this.meses[m] + ' ' + y, {"colspan": 7});

                nuevaTabla.appendChild(thead);
                thead.appendChild(tr);
                tr.appendChild(tdMES);

                let trDIAS = Clinica.nuevoElemento("tr", "", {class: "days"});
                let tdDias = Clinica.nuevoElemento("td", "",);

                nuevaTabla.appendChild(trDIAS);

                for (var i = 0; i < this.wd.length; i++) {
                    let tdDias = Clinica.nuevoElemento("td", this.wd[i]);
                    trDIAS.appendChild(tdDias)
                }

                let tr2 = Clinica.nuevoElemento("tr", "", {"id": "semana1"});
                nuevaTabla.appendChild(tr2);

                let semana = 1;
                let contadorSemana;
                let postSabado;

                var i = 1;
                do {

                    var wd = new Date(y, m, i).getDay();

                    if (wd == 0) {
                        //html += '<tr>';
                    } else if (i == 1) {

                        var k = prevlastdom - firstdom + 1;
                        for (var j = 0; j < firstdom; j++) {
                            let tdNotTODAY = Clinica.nuevoElemento("td", k, {class: "not-today"});
                            tr2.appendChild(tdNotTODAY);
                            k++;
                        }
                    }

                    var chk = new Date();
                    var chkY = chk.getFullYear();
                    var chkM = chk.getMonth();

                    if (chkY == y && chkM == m && i == d) {
                        let tdTODAY = Clinica.nuevoElemento("td", i, {class: "today"});
                        tr2 = nuevaTabla.querySelector('#semana' + semana + '');
                        tr2.appendChild(tdTODAY);
                        contadorSemana = 0;
                        postSabado = 0;

                    } else {
                        let tdTODAY = Clinica.nuevoElemento("td", i, {class: "normal"});


                        if ((contadorSemana < 7) && (contadorSemana >= 0)) {
                            contadorSemana++;

                            for (var abc = 0; abc <= especialista.diasQueAtiende.length; abc++) {
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


                                if ((day === especialista.diasQueAtiende[abc]) && (atiende)) {
                                    //console.log(especialista.diasQueAtiende[abc])
                                    console.log(day, "hoy atiende");
                                    //tdTODAY.classList.add('turno')

                                    tdTODAY = Clinica.nuevoElemento("td", i, {"id": day, class: "turno"});
                                    tdTODAY.atiende = false;
                                }
                            }
                        }

                        tr2 = nuevaTabla.querySelector('#semana' + semana + '');
                        tr2.appendChild(tdTODAY);

                    }
                    if (wd == 6) {
                        //html += '</tr>';
                        let tr2 = Clinica.nuevoElemento("tr", "", {"id": 'semana' + i});
                        nuevaTabla.appendChild(tr2);
                        semana = i;
                    } else if (i == lastdom) {
                        var k = 1;
                        for (wd; wd < 6; wd++) {
                            let tdNOTTODAY = Clinica.nuevoElemento("td", k, {class: "not-today"});
                            tr2.appendChild(tdNOTTODAY);
                            k++;
                        }
                    }

                    i++;
                } while (i <= lastdom);


                calendario.appendChild(nuevaTabla);

            }

        });

    }


    /*      let buttonCalendario = Clinica.nuevoElemento("button", "Calendario", {"onclick": "fun()"});
          contenedor.appendChild(buttonCalendario);*/


}
